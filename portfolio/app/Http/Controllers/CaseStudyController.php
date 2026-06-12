<?php

namespace App\Http\Controllers;

use App\Services\ContentService;

class CaseStudyController extends Controller
{
    public function index(ContentService $content)
    {
        $caseStudies = $content->getCollection(
            'case-study'
        );

        return view('pages.case-studies.index', [
            'title' => 'Case Studies',
            'caseStudies' => $caseStudies,
        ]);
    }

    public function show(
        ContentService $content,
        string $slug
    ) {
        $caseStudy = $content->find(
            'case-study',
            $slug
        );
        if (!$caseStudy) {
            return view('pages.case-studies.show', []);
        }

        return view('pages.case-studies.show', [
            'title' => $caseStudy['title'],
            'caseStudy' => $caseStudy,
        ]);
    }

    public function tags(ContentService $content, string $tag)
    {
        $all = collect($content->getCollection('case-study'));

        $caseStudies = $all->filter(function ($p) use ($tag) {
            if (empty($p['tags'])) {
                return false;
            }

            $pTags = is_array($p['tags']) ? $p['tags'] : (array) $p['tags'];

            return in_array($tag, $pTags, true);
        })->values();

        return view('pages.case-studies.index', [
            'title' => 'Case Studies tagged with "' . $tag . '"',
            'caseStudies' => $caseStudies,
        ]);
    }
    
}