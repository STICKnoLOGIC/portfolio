<x-layouts.app title="{{ $title ?? 'Projects' }} - STICKnoLOGIC"
    description="Here are some of my recent projects, showcasing a mix of my web development and open-source contributions experiences. These projects reflect my passion for building practical tools and engaging web applications."
    keywords="STICKnoLOGIC, projects, web development, open-source, creative portfolio"
    author="STICKnoLOGIC"
    image="{{ asset('images/projects-og.jpg') }}"
    jsonLd='"@type": "CollectionPage",
        "name": "Projects - STICKnoLOGIC",
        "description": "Here are some of my recent projects, showcasing a mix of web development, open-source contributions, and creative digital experiences. These projects reflect my passion for building practical tools and engaging web applications.",
        "url": "{{ env("APP_URL") . "/" . request()->path() }}",
        "image": "{{ asset("images/projects-og.jpg") }}",
        "mainEntity": {
            "@type": "ItemList",
            "itemListElement": {!! json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!} 
        }'>
    <section class="max-w-6xl mx-auto p-6"> 
        <x-section-title :id=null
            title="Projects"
            subtitle="Here are some of my recent projects, showcasing a mix of web development, open-source contributions, and creative digital experiences. These projects reflect my passion for building practical tools, engaging web applications, and unique pixel art creations."
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-12 gap-6">
            @if($projects && count($projects))
                @foreach($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            @else
                <h1 class="text-2xl font-bold text-center text-[var(--primary)] w-full mt-8">No projects found.</h1>
            @endif
        </div>
    </section>
</x-layouts.app>