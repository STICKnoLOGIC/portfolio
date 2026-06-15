<x-layouts.app title="As A Human - My Thoughts & Literature" 
    description="Sharing my thoughts, experiences, and insights on various topics that matter to me. From personal growth and mental health to technology and creativity, this is where I express myself as a human being." 
    keywords="as a human, thoughts, experiences, insights, personal growth, mental health, technology, creativity" 
    author="STICKnoLOGIC" 
    image="{{ asset('images/as-human-og.jpg') }}"
    jsonLd='"@type": "CollectionPage",
        "name": "As A Human - My Thoughts & Literature",
        "description": "Sharing my thoughts, experiences, and insights on various topics that matter to me.",
        "url": "{{ config("app.url") . "/" . request()->path() }}",
        "mainEntity": {
            "@type": "ItemList",
            "name": "List of Writings",
            "itemListElement": {!! json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        }'>

    <section class="max-w-6xl mx-auto mb-4 p-6">
        <x-section-title :id=null
            title="As a Human"
            subtitle="Sharing my thoughts, experiences, and insights on various topics that matter to me. From personal growth and mental health to technology and creativity, this is where I express myself as a human being."
        />

        <div class="flex flex-col gap-6 mt-12">
            @if($thoughts && count($thoughts))
                @foreach($thoughts as $thought)
                    <a href="{{ route('as-human.show', $thought['slug']) }}" class="card-hover text-xl md:text-3xl font-bold text-[var(--primary)] mb-2 hover:underline border-b border-[var(--primary)] transition">
                        <div class="bg-[var(--background)] rounded-lg shadow hover:shadow-lg transition">
                            ## {{ $thought['title'] }} <i class="fas fa-arrow-right text-[var(--primary)] ml-2"></i>
                            <p class="text-sm text-gray-400 mt-2">{{ \Carbon\Carbon::parse($thought['date'])->format('F j, Y') }}</p>
                        </div>
                    </a>
                @endforeach
            @else
                <h1 class="text-2xl font-bold text-center text-[var(--primary)] w-full mt-8">No Thoughts found.</h1>
            @endif

        </div>
        
    </section>

</x-layouts.app>