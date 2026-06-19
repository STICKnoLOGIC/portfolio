<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContentService;
use Illuminate\Support\Facades\Http;


class LegalController extends Controller
{
    private $gh_url;
    private $commonMarkConverter;

    public function __construct()
    {
        $this->gh_url = config('app.content_gh_url');
        $this->commonMarkConverter = new \League\CommonMark\CommonMarkConverter();
    }

    public function privacyPolicy()
    {
        $file = Http::get("{$this->gh_url}/privacy-policy.md");
        return view('pages.legal',[
            'title' => 'Privacy Policy',
            'description' => 'Read our privacy policy to understand how we collect, use, and protect your information.',
            'content' => $this->commonMarkConverter->convert($file)->getContent(),
        ]);
    }

    public function termsOfService(ContentService $contentService)
    {
        $file = Http::get("{$this->gh_url}/terms-of-services.md");

        return view('pages.legal',[
            'title' => 'Terms of Service',
            'description' => 'Read the terms of service for using our website and services.',
             'content' => $this->commonMarkConverter->convert($file)->getContent(),
        ]);
    }

    public function disclaimer()
    {
        $file = Http::get("{$this->gh_url}/disclaimer.md");
        return view('pages.legal',[
            'title' => 'Disclaimer',
            'description' => 'Read our disclaimer to understand the terms and conditions of our website and services.',
            'content' => $this->commonMarkConverter->convert($file)->getContent(),
        ]);
    }

    
}
