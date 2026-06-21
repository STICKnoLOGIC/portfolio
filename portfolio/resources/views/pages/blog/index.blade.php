<x-layouts.app title=" {{ $title ?? 'Blog' }} - STICKnoLOGIC"
    description="Welcome to my blog! Here I share insights, tutorials, and musings on design, development, and creativity. Whether you're a fellow developer, designer, or just curious about the world of tech, there's something here for everyone. Dive in and explore my latest posts!"
    keywords="blog, design, development, creativity, tutorials, insights, tech, programming, web development, software engineering"
    author="STICKnoLOGIC"
    image="{{ asset('images/blog-og.png') }}"
    jsonLd='"@type": "Blog",
        "name": "Vlog - STICKnoLOGIC",
        "description": "Here I share insights, tutorials, and musings on design, development, and creativity. Whether you are a fellow developer, designer, or just curious about the world of tech, there is something here for everyone. Dive in and explore my latest posts!",
        "url": "{{ config("app.url") . "/blog" }}",
        "publisher": {
            "@type": "Person",
            "name": "STICKnoLOGIC"
        },
        "blogPost": {!! json_encode($items,  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}'>

    <section class="max-w-6xl mx-auto mb-4 p-6">
        <x-section-title :id=null
            title="Blog"
            subtitle="Welcome to my blog! Here I share insights, tutorials, and musings on design, development, and creativity. Whether you're a fellow developer, designer, or just curious about the world of tech, there's something here for everyone. Dive in and explore my latest posts!"
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
            @if($posts && count($posts))
                @foreach($posts as $post)
                    <x-blog-post :post="$post" />
                @endforeach
            @else
                <h1 class="text-2xl font-bold text-center text-[var(--primary)] w-full mt-8">No blog posts found.</h1>
            @endif

        </div>

        <div class="mt-10">
            {{ $posts->links() }}
        </div>
    
    </section>

</x-layouts.app>