<div class="card-hover p-0 border border-[var(--secondary)] rounded-lg shadow-sm clip-path-card transition">
        <a href="{{ route('projects.show', $project['slug']) }}">
            <img lazyload src="{{ $project['cover'] ?? config('app.default_img') }}" alt="{{ $project['title'] }} cover image" class="w-full h-48 object-cover rounded-md mb-4">
        </a>
    <div class="p-4">
        <a href="{{ route('projects.show', $project['slug']) }}">
            <h3 class="text-2xl font-bold mb-2">{{ $project['title'] }}</h3>
        </a>
        <x-tags :tags="$project['technologies']" route="projects.technologies"/>
        <p class="text-gray-400 mb-4">{{ $project['excerpt'] }}</p>
        <a href="{{ route('projects.show', $project['slug']) }}" class="text-[var(--primary)] hover:text-[var(--secondary)] transition">
            View Project <i class="fas fa-arrow-right text-[var(--primary)] ml-2"></i>
        </a>
    </div>
</div>