<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogController extends Controller
{
    public function index(ContentService $content)
    {
        $posts = collect($content->getCollection('blog'));
        $perPage = 9;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $posts = new LengthAwarePaginator(
            $posts->forPage($currentPage, $perPage)->values(),
            $posts->count(),
            $perPage,
            $currentPage,
            [
                'path' => request()->url(),
                'query' => request()->query(),
            ]
        );

        $items = $posts->map(function ($post) {
            return [
                "@type" => "BlogPosting",
                "name" => $post['title'],
                "url" => route('blog.show', $post['slug']),
                "description" => $post['excerpt'] ?? null,
                "image" => $post['cover'] ?? env('DEFAULT_IMG'),
            ];
        })->toArray();

        return view('pages.blog.index', [
            'title' => 'Blog',
            'posts' => $posts,
            'items' => $items,
        ]);
    }

    public function tags(ContentService $content, string $tag)
    {
        $all = collect($content->getCollection('blog'));

        $posts = $all->filter(function ($p) use ($tag) {
            if (empty($p['tags'])) {
                return false;
            }

            $pTags = is_array($p['tags']) ? $p['tags'] : (array) $p['tags'];

            return in_array($tag, $pTags, true);
        })->values();

        $items = $posts->map(function ($post) {
            return [
                "@type" => "BlogPosting",
                "name" => $post['title'],
                "url" => route('blog.show', $post['slug']),
                "description" => $post['excerpt'] ?? null,
                "image" => $post['cover'] ?? env('DEFAULT_IMG'),
            ];
        })->toArray();

        return view('pages.blog.index', [
            'title' => 'Posts tagged with "'.$tag.'"',
            'posts' => new LengthAwarePaginator(
                $posts,
                $posts->count(),
                9,
                LengthAwarePaginator::resolveCurrentPage(),
                [
                    'path' => request()->url(),
                    'query' => request()->query(),
                ]
            ),
            'items' => $items,
        ]);
    }

    public function show(
        ContentService $content,
        string $slug
    ) {
        $post = $content->find('blog', $slug);

        if (! $post) {
            return view('pages.blog.show', []);
        }

        $all = collect($content->getCollection('blog'));

        $postTags = [];
        if (! empty($post['tags'])) {
            $postTags = is_array($post['tags']) ? $post['tags'] : (array) $post['tags'];
        }

        // Prefer posts that share at least one tag with the current post
        $recommended = $all->reject(function ($p) use ($slug) {
            return ($p['slug'] ?? null) === $slug;
        })->filter(function ($p) use ($postTags) {
            if (empty($postTags)) {
                return false;
            }

            $pTags = [];
            if (! empty($p['tags'])) {
                $pTags = is_array($p['tags']) ? $p['tags'] : (array) $p['tags'];
            }

            return count(array_intersect($postTags, $pTags)) > 0;
        })->unique('slug')->values()->take(3);

        // If we don't have enough tag-matching recommendations, fill with newest (excluding current and already included)
        if ($recommended->count() < 3) {
            $needed = 3 - $recommended->count();
            $already = $recommended->pluck('slug')->all();

            $fallback = $all->reject(function ($p) use ($slug, $already) {
                return ($p['slug'] ?? null) === $slug || in_array($p['slug'] ?? null, $already, true);
            })->values()->take($needed);

            $recommended = $recommended->concat($fallback);
        }

        return view('pages.blog.show', [
            'title' => $post['title'],
            'post' => $post,
            'recommended' => $recommended->values()->all(),
        ]);
    }

    public function author(ContentService $content, string $author)
    {
        $lower_author = strtolower($author);
        if($author !== $lower_author) {
           return redirect()->route('blog.author',$lower_author, 301); 
        }
        
        $all = collect($content->getCollection('blog'));
        $author_result = $content->find('author', $author);

        if (! $author_result) {
            return view('pages.blog.author', [
                'title' => 'Author not found',
            ]);
        }

        $posts = $all->filter(function ($p) use ($author) {
            return isset($p['author']) && strcasecmp($p['author'], $author) === 0;
        })->values();

        return view('pages.blog.author', [
            'title' => 'Meet "'.$author.'"!!',
            'posts' => $posts,
            'author' => $author_result,
        ]);
    }
}
