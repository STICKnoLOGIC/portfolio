<x-layouts.app title="{{ $title ?? 'Project Not Found' }} - STICKnoLOGIC"
    description="{{ $project['excerpt'] ?? 'Discover my projects, showcasing a mix of web development, open-source contributions, and creative digital experiences.' }}"
    keywords="{{ $project['keywords'] ?? 'projects, web development, open-source, creative digital experiences' }}"
    author="STICKnoLOGIC"
    image="{{ $project['cover'] ?? env('DEFAULT_IMG') }}"
    jsonLd='"@type": "SoftwareApplication",
        "name": "{{ $project["title"] }}",
        "description": "{{ $project["excerpt"] }}",
        "url": "{{ env("APP_URL") . "/" . request()->path() }}",
        "applicationCategory": "DesignApplication",
        "operatingSystem": "Web",
        "author": {
            "@type": "Person",
            "name": "STICKnoLOGIC",
            "url": "{{ env("APP_URL")."/about" }}"
        },
        "screenshot": "{{ $project["cover"] ?? env("DEFAULT_IMG") }}"'>

    <section class="max-w-6xl mx-auto px-6 py-24">
        @if(empty($project))
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold mb-4">Project Not Found</h2>
                <p class="text-gray-400 mb-6">Sorry, the project you are looking for does not exist.</p>
                <a href="{{ route('projects') }}" class="inline-block bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition">Back to Projects</a>
            </div>
        @else
                @if($project['cover'])
                    <img src="{{ $project['cover'] }}" alt="{{ $project['title'] }} cover image" class="w-full object-cover rounded-md mb-6">
                @endif
                <x-section-title :id=null
                    title="{{ $project['title'] }}"
                    subtitle="{{ $project['excerpt'] }}"
                />
                    <div class="flex flex-wrap items-center gap-1 sm:gap-4 mt-4">
                    @if($project['link'])
                            <a href="{{ $project['link'] }}" target="_blank" class="bg-[var(--secondary)] text-gray-900 font-large   px-3 py-1 mb-4 rounded hover:bg-[var(--primary)]"><i class="fab fa-github"></i> View Source Code</a>
                    @endif
                    @if($project['demo'])
                            <a href="{{ $project['demo'] }}" target="_blank" class="bg-[var(--secondary)] text-gray-900 font-large   px-3 py-1 mb-4 rounded hover:bg-[var(--primary)]"><i class="fa-solid fa-play"></i> View Demo</a>
                    @endif
                    </div>
                @if($project['technologies'] && count($project['technologies']))
                    <x-tags :tags="$project['technologies']" route="projects.technologies" />
                @endif
                <div class="prose prose-invert max-w-none mt-6">
                    {!! $project['html'] !!}
                </div>
            </div>
        @endif
    </section>
</x-layouts.app>