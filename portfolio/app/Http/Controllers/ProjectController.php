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
        $pos=0;
        $items = $projects->map(function ($project) use (&$pos) {
            $pos++;
            return [
                "@type" => "ListItem",
                "position" => $pos,
                "url" => route("projects.show", $project["slug"]),
                "name" => $project["title"],
            ];
        })->toArray();

        return view('pages.project.index', [
            'title' => 'Projects',
            'projects' => $projects,
            'items' => $items,
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

        $pos=0;

        $items = $projects->map(function ($project) use (&$pos) {
            $pos++;
            return [
                "@type" => "ListItem",
                "position" => $pos,
                "name" => $project["title"],
                "url" => route("projects.show", $project["slug"]),
            ];
        })->toArray();

        return view('pages.project.index', [
            'title' => 'Projects using "' . $tech . '"',
            'projects' => $projects,
            'items' => $items,
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