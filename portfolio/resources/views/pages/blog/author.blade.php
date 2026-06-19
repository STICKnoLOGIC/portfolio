<x-layouts.app title="Author - {{ $title ?? 'Author Not Found' }}" 
    description="{{ $author['excerpt'] ?? 'Discover the profile of ' . ($author['name'] ?? 'this author') . ', including their biography, social media links, and a collection of their blog posts. Learn more about the person behind the words and explore their contributions to the world of blogging.' }}" 
    keywords="{{ $author['keywords'] ?? 'author, profile, biography, social media, blog posts, ' . ($author['name'] ?? 'author') }}" 
    author="{{ $author['name'] ?? 'Unknown Author' }}"
    image="{{ $author['avatar'] ?? config('app.default_img') }}"
    jsonLd='"@type": "ProfilePage",
        "name": "{{ $author["name"] ?? "Unknown Author" }}",
        "description": "{{ $author["excerpt"] ?? "Discover the profile of " . ($author["name"] ?? "this author") . ", including their biography, social media links, and a collection of their blog posts. Learn more about the person behind the words and explore their contributions to the world of blogging." }}",
        "url": "{{ config("app.url") . "/" . request()->path() }}",
        "image": "{{ $author["avatar"] ?? config("app.default_img") }}",
        "sameAs": {!!  json_encode($author["links"] ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}'>
    <div class="max-w-7xl mx-auto px-4 py-16">
        @if(empty($author))
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold mb-4">Author Not Found</h2>
                <p class="text-gray-400 mb-6">Sorry, the author you are looking for does not exist.</p>
                <a href="{{ route('blog') }}" class="inline-block bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition">Back to Blog</a>
            </div>
        @else
            <div class="text-center flex flex-col items-center">
            @if($author['avatar'])
                <img src="{{ $author['avatar'] }}" alt="{{ $author['name'] }}'s Avatar" class="w-32 h-32 rounded-full mb-4">
            @else
                <div class="w-32 h-32 rounded-full bg-gray-500 flex items-center justify-center mb-4">
                    <span class="text-white text-2xl font-bold">{{ strtoupper(substr($author['name'], 0, 1)) }}</span>
                </div>
            @endif
            <h1 class="text-2xl md:text-4xl font-bold mb-4">{{ $author['name'] }}</h1>
            @if($author['links'] && count($author['links']))
                <div class="flex gap-4 flex-wrap mb-6">
                    @foreach($author['links'] as $link)
                        <div>
                            <i class="fa-solid fa-link text-[var(--primary)]"></i>
                            <a href="{{ $link }}" target="_blank" class="text-[var(--primary)] hover:text-[var(--secondary)] transition">
                                {{ $link }}
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
            </div>
            <div class="prose prose-invert prose-headings:text-[var(--secondary)] prose-a:text-[#FFDAB9] prose-strong:text-[var(--primary)] max-w-none my-8">
                {!! $author['html'] !!}
            </div>
            <h2 class="text-2xl font-bold my-6 text-[var(--primary)]">Posts by {{ $author['name'] }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
                @foreach($posts as $post)
                    <x-blog-post :post="$post" />
                @endforeach
            </div>
        @endif
    </div>
</x-layouts.app>