<div class="card-hover p-0 border border-[var(--secondary)] rounded-lg shadow-sm clip-path-card transition">
    <a href="{{ route('creative.show', $artwork['slug']) }}">
        <img lazyload src="{{ $artwork['cover'] ?? config('app.default_img') }}" alt="{{ $artwork['title'] }} cover image" class="w-full h-48 object-cover rounded-md mb-4">
    </a>
    <div class="p-4">
        <a href="{{ route('creative.show', $artwork['slug']) }}">
            <h3 class="text-2xl font-bold mb-2">{{ $artwork['title'] }}</h3>
        </a>
        <x-tags :tags="$artwork['tags']" route="creative.tags"/>
        <p class="text-gray-400 mb-4">{{ $artwork['excerpt'] }}</p>
        <a href="{{ route('creative.show', $artwork['slug']) }}" class="text-[var(--primary)] hover:text-[var(--secondary)] transition">
            View Artwork
            <i class="fas fa-arrow-right text-[var(--primary)] ml-2"></i>
        </a>
    </div>
</div>