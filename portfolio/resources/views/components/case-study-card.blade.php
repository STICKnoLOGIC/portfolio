<div class="card-hover p-0 border border-[var(--secondary)] rounded-lg shadow-sm clip-path-card transition">
    <a href="{{ route('case-studies.show', $caseStudy['slug']) }}">
        <img lazyload src="{{ $caseStudy['cover'] ?? config('app.default_img') }}" alt="{{ $caseStudy['title'] }} cover image" class="w-full h-48 object-cover rounded-md mb-4">
    </a>
    <div class="px-4 py-2"> 
    <a href="{{ route('case-studies.show', $caseStudy['slug']) }}" class="font-semibold hover:underline hover:underline-[var(--primary)] transition">
        <h2 class="text-xl font-bold">
            {{ $caseStudy['title'] }}
        </h2>
    </a>
    <x-tags :tags="$caseStudy['tags']" route="case-studies.tags"/>
    <p class="text-gray-600 mt-2">
        {{ $caseStudy['excerpt'] }}
    </p>

    <a href="{{ route('case-studies.show', $caseStudy['slug']) }}" class="text-[var(--primary)] mt-3 inline-block">
        Read more <i class="fas fa-arrow-right text-[var(--primary)] ml-2"></i>
    </a>
    </div>
</div>