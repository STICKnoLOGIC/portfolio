<?php

namespace App\Http\Controllers;

use App\Services\ContentService;

class HomeController extends Controller
{
    public function index(ContentService $content)
    {
        $projects = $content
            ->getCollection('projects',featured: true)
            ->take(3);

        $posts = $content
            ->getCollection('blog',featured: true)
            ->take(3);

        $artworks = $content
            ->getCollection('artworks',featured: true)
            ->take(6);

        return view('pages.home', [
            'projects' => $projects,
            'posts' => $posts,
            'artworks' => $artworks,
        ]);
    }
}