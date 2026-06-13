<x-layouts.app title="{{ $caseStudy['title'] ?? 'Case Study Not Found' }} - STICKnoLOGIC"
    description="{{ $caseStudy['excerpt'] ?? 'Explore detailed case studies of my most significant projects, showcasing the challenges faced, solutions implemented, and valuable lessons learned throughout my career.' }}"
    keywords="{{ $caseStudy['tags'] ? implode(', ', $caseStudy['tags']) : 'Case Studies, Projects, Challenges, Solutions, Lessons Learned, Portfolio' }}"
    author="STICKnoLOGIC"
    image="{{ $caseStudy['cover'] ?? env('DEFAULT_IMG') }}">
    <section class="max-w-6xl mx-auto px-6 py-24">
        @if(empty($caseStudy))
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold mb-4">Case Study Not Found</h2>
                <p class="text-gray-400 mb-6">Sorry, the case study you are looking for does not exist.</p>
                <a href="{{ route('case-studies') }}" class="inline-block bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition">Back to Case Studies</a>
            </div>
        @else
            @if($caseStudy['cover'])
                <img src="{{ $caseStudy['cover'] }}" alt="{{ $caseStudy['title'] }} cover image" class="w-full object-cover rounded-md mb-8">
            @endif
            <x-section-title :id=null
                title="{{ $caseStudy['title'] }}"
                subtitle="{{ $caseStudy['excerpt'] }}"
            />
            <p class="text-sm text-gray-500 mb-8">
                By <a href="{{ route('blog.author', 'sticknologic') }}" class="font-semibold text-[var(--secondary)] hover:text-orange-500 transition">STICKnoLOGIC</a> | {{ \Carbon\Carbon::parse($caseStudy['date'])->format('F j, Y') }} | {{ read_time($caseStudy['html']) }} min read
            </p>
            @if($caseStudy['tags'] && count($caseStudy['tags']))
                <x-tags :tags="$caseStudy['tags']" route="case-studies.tags" />
            @endif
            <div class="prose prose-invert max-w-none mt-6">
                {!! $caseStudy['html'] !!}
            </div>
        @endif
    </section>
</x-layouts.app>