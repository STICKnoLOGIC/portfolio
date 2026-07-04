<x-layouts.app title="{{ $artwork['title'] ?? 'Artwork Not Found' }} - STICKnoLOGIC"
    description="{{ $artwork['excerpt'] ?? 'Explore my creative work, including pixel art and digital illustrations. Discover game assets, character designs, and experimental art pieces that showcase my artistic skills and creativity.' }}"
    keywords="{{ $artwork['keywords'] ?? 'creative work, pixel art, digital illustrations, game assets, character designs, experimental art, portfolio' }}"
    author="STICKnoLOGIC"
    image="{{ $artwork['cover'] ?? config('app.default_img') }}"
    jsonLd='"@type": "CreativeWork",
        "name": "{{ $artwork["title"] ?? "Creative Work - STICKnoLOGIC"}}",
        "description": "{{ $artwork["excerpt"] }}",
        "image": "{{ $artwork["cover"] ?? config("app.default_img") }}",
        "url": "{{ config("app.url") . "/" . request()->path() }}",
        "dateCreated": "{{ $artwork["date"] }}",
        "artist": {
            "@type": "Person",
            "name": "STICKnoLOGIC",
            "url": "{{ config("app.url")."/about" }}"
        },
        "artMedium": "{{ implode(", ", $artwork["medium"] ?? []) }}",
        "keywords": {!! json_encode($artwork["tags"], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) !!}'>
    <section class="max-w-6xl mx-auto px-6 py-24">
    @if(empty($artwork))
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold mb-4">Artwork Not Found</h2>
                <p class="text-gray-400 mb-6">Sorry, the artwork you are looking for does not exist.</p>
                <a href="{{ route('creative') }}" class="inline-block bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition">Back to Creative Works</a>
            </div>
        @else
            @if($artwork['cover'])
                <img src="{{ $artwork['cover'] }}" alt="{{ $artwork['title'] }}" class="w-full object-cover rounded-md mb-8">
            @endif

            <x-section-title :id=null
                title="{{ $artwork['title'] }}"
                subtitle="{{ $artwork['excerpt'] }}"
            />

            <div class="mt-4">
                <p class="text-sm text-gray-500 mb-8">
                    By <a href="{{ route('blog.author', 'sticknologic') }}" class="font-semibold text-[var(--secondary)] hover:text-orange-500 transition">STICKnoLOGIC</a> | {{ \Carbon\Carbon::parse($artwork['date'])->format('F j, Y') }} | {{ read_time($artwork['html']) }} min read
                </p>
                <div class="flex gap-2">
                    @if($artwork['tags'] && count($artwork['tags']))
                        <x-tags :tags="$artwork['tags']" route="creative.tags" />
                    @endif
                </div>
            </div>
            <div class="prose prose-invert prose-headings:text-[var(--secondary)] prose-a:text-[#FFDAB9] prose-strong:text-[var(--primary)] max-w-none prose-table:overflow-x-auto prose-table:whitespace-no-wrap prose-table:block prose-table:max-w-full">
                {!! $artwork['html'] !!}
            </div>
        @endif
    </section>
</x-layouts.app>