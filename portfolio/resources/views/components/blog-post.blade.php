<div class="card-hover p-0 border border-[var(--secondary)] rounded-lg shadow-sm clip-path-card transition">
    <a href="{{ route('blog.show', $post['slug']) }}">
        <img lazyload src="{{ $post['cover'] ?? env('DEFAULT_IMG') }}" alt="{{ $post['title'] }} cover image" class="w-full h-48 object-cover rounded-md mb-4">
    </a>
    <div class="px-4 py-2">
    <a href="{{ route('blog.show', $post['slug']) }}" class="font-semibold hover:underline hover:underline-[var(--primary)] transition">
        <h2 class="text-xl font-bold">
            {{ $post['title'] }}
        </h2>
    </a>
    <p class="text-sm text-gray-500 mt-1">
        By <a href="{{ route('blog.author', $post['author']) }}" class="font-semibold text-[var(--secondary)] hover:text-orange-500 transition">{{ $post['author'] }}</a> | {{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}
    </p>
    <x-tags :tags="$post['tags']" route="blog.tags"/>
    <p class="text-gray-600 mt-2">
        {{ $post['excerpt'] }}
    </p>

    <a href="{{ route('blog.show', $post['slug']) }}" class="text-[var(--primary)] mt-3 inline-block">
        Read more ->
    </a>
    </div>
</div>