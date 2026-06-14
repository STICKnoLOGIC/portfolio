<?php

namespace App\Http\Controllers;

use App\Services\ContentService;

class AsHumanController extends Controller
{
    public function index(ContentService $content)
    {
        $content = $content->getCollection('as-human');

        $pos=0;
        $items = $content->map(function ($item) use (&$pos) {
            $pos++;
            return [
                '@type' => 'ListItem',
                'position' => $pos,
                "item" => [
                    '@type' => 'BlogPosting',
                    'name' => $item['title'],
                    'description' => $item['excerpt'],
                    'url' => route('as-human', $item['slug']),
                    'datePublished' => $item['date'],
                    'author' => [
                        '@type' => 'Person',
                        'name' => 'STICKnoLOGIC',
                        ],
                    ]
                ];
        })->toArray();

        return view('pages.as-human.index', [
            'thoughts' => $content,
            'items' => $items,
        ]);
    }

    public function show($slug, ContentService $content)
    {
        $thought = $content->find('as-human', $slug);
        if (! $thought) {
            return view('pages.as-human.show');
        }

        return view('pages.as-human.show', [
            'thought' => $thought,
        ]);
    }
}
