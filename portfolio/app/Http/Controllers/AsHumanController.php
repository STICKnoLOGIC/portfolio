<?php

namespace App\Http\Controllers;

use App\Services\ContentService;

class AsHumanController extends Controller
{
    public function index(ContentService $content)
    {
        $content = $content->getCollection('as-human');

        return view('pages.as-human.index', [
            'thoughts' => $content,
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
