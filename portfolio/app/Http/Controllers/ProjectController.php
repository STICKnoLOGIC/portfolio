<?php

namespace App\Http\Controllers;

use App\Services\ContentService;

class ProjectController extends Controller
{
    public function index(ContentService $content)
    {
        $projects = $content->getCollection(
            'projects'
        );

        return view('pages.project.index', [
            'title' => 'Projects',
            'projects' => $projects,
        ]);
    }

    public function tech(ContentService $content, string $tech)
    {
        $all = collect($content->getCollection('projects'));

        $projects = $all->filter(function ($p) use ($tech) {
            if (empty($p['technologies'])) {
                return false;
            }

            $pTech = is_array($p['technologies']) ? $p['technologies'] : (array) $p['technologies'];

            return in_array($tech, $pTech, true);
        })->values();

        return view('pages.project.index', [
            'title' => 'Projects using "' . $tech . '"',
            'projects' => $projects,
        ]);
    }

    public function show(
        ContentService $content,
        string $slug
    ) {
        $project = $content->find(
            'projects',
            $slug
        );

        if (!$project) {
            return view('pages.project.show', []);
        }

        return view('pages.project.show', [
            'title' => $project['title'],
            'project' => $project,
        ]);
    }
}