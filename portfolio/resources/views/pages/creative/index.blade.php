<x-layouts.app title="Creative Work - STICKnoLOGIC"
    description="Explore my creative work, including pixel art and digital illustrations. Discover game assets, character designs, and experimental art pieces that showcase my artistic skills and creativity."
    keywords="creative work, pixel art, digital illustrations, game assets, character designs, experimental art, portfolio"
    author="STICKnoLOGIC"
    image="{{ asset('images/creative-og.jpg') }}"
    jsonLd='"@type": "CollectionPage",
        "name": "Creative Work - STICKnoLOGIC",
        "description": "Explore my creative work, including pixel art and digital illustrations. Discover game assets, character designs, and experimental art pieces that showcase my artistic skills and creativity.",
        "url": "{{ config("app.url") . "/" . request()->path() }}",
        "image": "{{ asset("images/creative-og.jpg") }}",
        "mainEntity": {
            "@type": "ItemList",
            "itemListElement": {!! json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!} 
        }'>

    <section class="max-w-6xl mx-auto p-6">

        <x-section-title :id=null
            title="Creative Work"
            subtitle="In addition to web development, I also create pixel art and digital illustrations. Below are some of my recent creative projects, which include game assets, character designs, and experimental art pieces."
        />

        <div class="grid md:grid-cols-2 lg:grid-cols-3 mt-8 gap-6">
            @if($artworks && count($artworks))
                @foreach($artworks as $artwork)
                    <x-artwork-card :artwork="$artwork" />
                @endforeach
            @else
                <h1 class="text-2xl font-bold text-center text-[var(--primary)] w-full mt-8">No artworks found.</h1>
            @endif
        </div>
    </section>
</x-layouts.app>