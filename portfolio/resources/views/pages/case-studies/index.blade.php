<x-layouts.app title="Case Studies - STICKnoLOGIC"
    description="Explore detailed case studies of my most significant projects, showcasing the challenges faced, solutions implemented, and valuable lessons learned throughout my career."
    keywords="Case Studies, Projects, Challenges, Solutions, Lessons Learned, Portfolio"
    author="STICKnoLOGIC"
    image="{{ asset('images/case-studies-og.jpg') }}"
    jsonLd='"@type": "CollectionPage",
        "name": "Case Studies - STICKnoLOGIC",
        "description": "Explore detailed case studies of my most significant projects, showcasing the challenges faced, solutions implemented, and valuable lessons learned throughout my career.",
        "url": "{{ env("APP_URL") . "/" . request()->path() }}",
        "image": "{{ asset("images/case-studies-og.jpg") }}",
        "mainEntity": {
            "@type": "ItemList",
            "itemListElement": {!! json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!} 
        }'>
    <section class="max-w-6xl mx-auto mb-4 p-6">
        <x-section-title :id=null
            title="Case Studies"
            subtitle="In-depth looks at some of my most significant projects, detailing the challenges faced, solutions implemented, and lessons learned along the way."
        />
        <div class="grid md:grid-cols-2 lg:grid-cols-3 mt-8 gap-6">
            @if($caseStudies && count($caseStudies))
                @foreach($caseStudies as $caseStudy)
                    <x-case-study-card :caseStudy="$caseStudy"/>
            @endforeach
            @else
                <h1 class="text-2xl font-bold text-center text-[var(--primary)] w-full mt-8">No case studies found.</h1>
            @endif
        </div>
    </section>
</x-layouts.app>