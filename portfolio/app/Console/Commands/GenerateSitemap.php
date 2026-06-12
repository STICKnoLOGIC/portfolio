<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\{
    BlogPost,
    Project,
    CaseStudy,
    Creative,
    AsHuman
};
use App\Services\ContentService;

#[Signature('sitemap:generate')]
#[Description('Command description')]
class GenerateSitemap extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(ContentService $content): int
    {
        $human=$content->getCollection('as-human');
        $blog=$content->getCollection('blog');
        $projects=$content->getCollection('projects');
        $caseStudies=$content->getCollection('case-studies');
        $creative=$content->getCollection('artworks');

        $sitemap = Sitemap::create();
        $this->addUrls($sitemap, route('home'), 1.0);
        $this->addUrls($sitemap, route('about'), 0.8);
        $this->addUrls($sitemap, route('contact-us'), 0.8);
        $this->addUrls($sitemap, route('write-with-us'), 0.8);
        $this->addUrls($sitemap, route('as-human'), 0.9);
        $this->addUrls($sitemap, route('blog'), 0.9);
        $this->addUrls($sitemap, route('projects'), 0.9);
        $this->addUrls($sitemap, route('case-studies'), 0.9);
        $this->addUrls($sitemap, route('creative'), 0.9);

        foreach ($human as $item) {
            $this->addUrls($sitemap, route('as-human.show', $item['slug']), 0.7);
        }
        foreach ($blog as $item) {
            $this->addUrls($sitemap, route('blog.show', $item['slug']));
        }
        foreach ($projects as $item) {
            $this->addUrls($sitemap, route('projects.show', $item['slug']));
        }
        foreach ($caseStudies as $item) {
            $this->addUrls($sitemap, route('case-studies.show', $item['slug']));
        }
        foreach ($creative as $item) {
            $this->addUrls($sitemap, route('creative.show', $item['slug']));
        }
        $sitemap->sort()->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');

        return self::SUCCESS;
    }

    protected function addUrls(Sitemap $sitemap, string $url,$priority=0.5)
    {
        $sitemap->add(Url::create($url)->setLastModificationDate(now())->setChangeFrequency('daily')->setPriority($priority));
    }
}

