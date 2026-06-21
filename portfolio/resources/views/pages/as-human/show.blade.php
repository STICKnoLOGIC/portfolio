<x-layouts.app title="As A Human - {{ $thought['title'] ?? 'Thought Not Found' }}" 
    description="{{$thought['excerpt'] ?? 'Sharing my thoughts, experiences, and insights on various topics that matter to me. From personal growth and mental health to technology and creativity, this is where I express myself as a human being.' }}"
    keywords="{{ $thought['keywords'] ?? 'as a human, thoughts, experiences, insights, personal growth, mental health, technology, creativity' }}" 
    author="STICKnoLOGIC" 
    image="{{ asset('images/as-human-og.png') }}"
    jsonLd='"@type": "BlogPosting", 
        "headline": "{{ $thought["title"] }}",
        "description": "{{ $thought["excerpt"] }}",
        "image": "{{ $thought["cover"] ?? config("app.default_img") }}",
        "datePublished": "{{ \Carbon\Carbon::parse($thought["date"])->toIso8601String() }}",
        "author": {
            "@type": "Person",
            "name": "STICKnoLOGIC",
            "url": "{{ config("app.url") ."/about" }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "STICKnoLOGIC",
            "logo": {
            "@type": "ImageObject",
            "url": "{{ asset("images/logo.png") }}"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ config("app.url") . "/" . request()->path() }}"
        }'>
    <section class="max-w-6xl mx-auto px-6 py-24">
        @if(empty($thought) || !$thought)
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold mb-4">Thought Not Found</h2>
                <p class="text-gray-400 mb-6">Sorry, the thought you are looking for does not exist.</p>
                <a href="{{ route('as-human') }}" class="inline-block bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition">Back to As Human</a>
            </div>
        @else
            <h1 class="text-4xl text-center font-bold mb-6 underline decoration-[var(--primary)] mb-12">{{ $thought['title'] }}</h1>
            <p class="text-sm text-gray-500 text-center mb-8">
                By <a href="{{ route('blog.author', 'STICKnoLOGIC') }}" class="font-semibold text-[var(--secondary)] hover:text-orange-500 transition">STICKnoLOGIC</a> | {{ \Carbon\Carbon::parse($thought['date'])->format('F j, Y') }} | {{ read_time($thought['html']) }} min read
            </p>
            @if($thought['cover'])
                <img src="{{ $thought['cover'] }}" alt="{{ $thought['title'] }} cover image" class="w-full object-cover rounded-md mb-8">
            @endif
            <div class="prose prose-invert prose-headings:text-[var(--secondary)] prose-a:text-[#FFDAB9] prose-strong:text-[var(--primary)] max-w-none">
                {!! $thought['html'] !!}
            </div>
        @endif
    </section>
</x-layouts.app>