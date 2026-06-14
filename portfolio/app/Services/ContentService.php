<?php
namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use League\CommonMark\CommonMarkConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use DonatelloZa\RakePlus\RakePlus;

class ContentService
{

    public function __construct()
    {
        $this->gh_url = env('CONTENT_GH_URL');
    }

    public function getCollection(string $type, bool $featured = false)
    {
        $cacheKey = "content-cache.{$type}";
        $cacheTtlMinutes = 30;

        $cached = Cache::get($cacheKey, []);
        $cachedAt = Cache::get("{$cacheKey}.cached_at");

        if (!empty($cached) && $this->cacheIsFresh($cachedAt, $cacheTtlMinutes)) {
            $collection = collect($cached)->sortByDesc('date')->sortByDesc('featured');
            return $featured ? $collection->where('featured', true) : $collection;
        }

        $response = Http::get("{$this->gh_url}/{$type}/index.json");

        if (!$response) {
            if (!empty($cached)) {
                $collection = collect($cached)->sortByDesc('date')->sortByDesc('featured');
                return $featured ? $collection->where('featured', true) : $collection;
            }

            return [];
        }

        Cache::put($cacheKey, $response->json(), now()->addMinutes($cacheTtlMinutes));
        Cache::put("{$cacheKey}.cached_at", now()->timestamp, now()->addMinutes($cacheTtlMinutes));

        $collection = collect($response->json())->sortByDesc('date')->sortByDesc('featured');
        return $featured ? $collection->where('featured', true) : $collection;
    }

    protected function getSlugList(string $type)
    {
        $response = Http::get("{$this->gh_url}/{$type}/slugs.json");

        if (!$response) {
            if (Cache::has("content-cache.{$type}.slugs")) {
                return Cache::get("content-cache.{$type}.slugs");
            }
            return [];
        }

        Cache::put("content-cache.{$type}.slugs", $response->json(), now()->addMinutes(60));
        return collect($response->json())->toArray();
    }

    protected function cacheIsFresh($cachedAt, int $cacheTtlMinutes): bool
    {
        if ($cachedAt instanceof \DateTimeInterface) {
            return now()->diffInMinutes($cachedAt) < $cacheTtlMinutes;
        }

        if (is_numeric($cachedAt)) {
            return (now()->timestamp - (int) $cachedAt) < ($cacheTtlMinutes * 60);
        }

        if (is_string($cachedAt)) {
            $timestamp = strtotime($cachedAt);

            return $timestamp !== false && (now()->timestamp - $timestamp) < ($cacheTtlMinutes * 60);
        }

        return false;
    }

    public function find(string $type, string $slug)
    {
        
        $slug_res=$type === 'author' ? $slug :( $this->getSlugList($type)[$slug] ?? null );
        if(!$slug_res) {
            return null;
        }
        $content = Http::get("{$this->gh_url}/{$type}/{$slug_res}.md");

        if(!$content || Cache::has("content-cache.{$type}.{$slug}")) {
            return $this->parse(Cache::get("content-cache.{$type}.{$slug}")  ?? '');
        }
        if($content->successful()) {
            Cache::put("content-cache.{$type}.{$slug}", $content->body(), now()->addMinutes(60));
            return $this->parse($content->body());
        }
    }

    protected function parse($content)
    {
        $document = YamlFrontMatter::parse($content);

        $converter = new CommonMarkConverter();
        
        $keywords = RakePlus::create(strip_tags($converter->convert($document->body())), 'en_US')->sortByScore('desc')->get();
        
        return [
            'title' => $document->matter('title'),
            'slug' => $document->matter('slug'),
            'excerpt' => $document->matter('excerpt'),
            'date' => $document->matter('date'),
            'tags' => $document->matter('tags'),
            'technologies' => $document->matter('technologies'),
            'cover' => $document->matter('cover'),
            'avatar' => $document->matter('avatar'),
            'links' => $document->matter('links'),
            'link' => $document->matter('link'),
            'demo' => $document->matter('demo'),
            'author' => $document->matter('author'),
            'medium' => $document->matter('medium'),
            'keywords' => $keywords? implode(', ', $keywords) : null,
            'name' => $document->matter('name'),
            'html' => $converter->convert(
                $document->body()
            ),
        ];
    }

}