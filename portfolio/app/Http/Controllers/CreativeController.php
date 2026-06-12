<?php

namespace App\Http\Controllers;

use App\Services\ContentService;

class CreativeController extends Controller
{
    public function index(ContentService $content)
    {
        $artworks = $content->getCollection(
            'artworks'
        );

        return view('pages.creative.index', [
            'title' => 'Creative Work',
            'artworks' => $artworks,
        ]);
    }

    public function show(
        ContentService $content,
        string $slug
    ) {
        $artwork = $content->find(
            'artworks',
            $slug
        );
        if (!$artwork) {
            return view('pages.creative.show', []);
        }

        return view('pages.creative.show', [
            'title' => $artwork['title'],
            'artwork' => $artwork,
        ]);
    }

    public function tags(ContentService $content, string $tag)
    {
        $all = collect($content->getCollection('artworks'));

        $artworks = $all->filter(function ($p) use ($tag) {
            if (empty($p['tags'])) {
                return false;
            }

            $pTags = is_array($p['tags']) ? $p['tags'] : (array) $p['tags'];

            return in_array($tag, $pTags, true);
        })->values();

        return view('pages.creative.index', [
            'title' => 'Creative Work tagged with "' . $tag . '"',
            'artworks' => $artworks,
        ]);
    }
}