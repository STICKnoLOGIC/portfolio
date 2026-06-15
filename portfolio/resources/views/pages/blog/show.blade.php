<x-layouts.app title="{{ $title ?? 'Blog Post' }} - {{ $post['author'] ?? 'Unknown Author' }}"
    description="{{ $post['excerpt'] ?? 'Read this insightful blog post on design, development, and creativity. Explore the latest trends and tips in tech, programming, and web development.' }}"
    keywords="{{ $post['keywords'] ?? 'blog post, design, development, creativity, tech, programming, web development, software engineering' }}"
    author="{{ $post['author'] ?? 'Unknown Author' }}"
    image="{{ $post['cover'] ?? config('app.default_img') }}"
    jsonLd='"@type": "BlogPosting",
        "headline": "{{ $post["title"] }}",
        "description": "{{ $post["excerpt"] }}",
        "url": "{{ config("app.url") . "/" . request()->path() }}",    
        "image": "{{ $post["cover"] ?? config("app.default_img") }}",
        "datePublished": "{{ \Carbon\Carbon::parse($post["date"])->toIso8601String() ?? now()->toIso8601String() }}",
        "author": {
            "@type": "Person",
            "name": "{{ $post["author"] ?? "STICKnoLOGIC" }}",
            "url": "{{ route("blog.author", $post["author"] ?? "sticknologic") }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "STICKnoLOGIC",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset("images/logo.png") }}"
            }
        }'>

    <section class="max-w-6xl mx-auto px-6 py-24">
        @if(empty($post))
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold mb-4">Post Not Found</h2>
                <p class="text-gray-400 mb-6">Sorry, the post you are looking for does not exist.</p>
                <a href="{{ route('blog') }}" class="inline-block bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition">Back to Blog</a>
            </div>
        @else
            <h1 class="text-4xl text-center font-bold mb-6 underline decoration-[var(--primary)] mb-12">{{ $title }}</h1>
            <p class="text-sm text-gray-500 text-center mb-8">
                By <a href="{{ route('blog.author', $post['author']) }}" class="font-semibold text-[var(--secondary)] hover:text-orange-500 transition">{{ $post['author'] }}</a> | {{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }} | {{ read_time($post['html']) }} min read
            </p>
            @if($post['cover'])
                <img src="{{ $post['cover'] }}" alt="{{ $post['title'] }} cover image" class="w-full object-cover rounded-md mb-8">
            @endif
            @if($post['tags'] && count($post['tags']))
                <x-tags :tags="$post['tags']" route="blog.tags" />
            @endif
            <div class="prose prose-invert max-w-none">
                {!! $post['html'] !!}
            </div>

            @if(!empty($recommended) && count($recommended))
                <div class="mt-12">
                    <h3 class="text-2xl font-bold mb-6">Recommended</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($recommended as $rec)
                            <x-blog-post :post="$rec" />
                        @endforeach
                    </div>
                </div>
            @endif
        @endif
    </section>
</x-layouts.app>
