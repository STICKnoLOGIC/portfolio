<x-layouts.app title="{{ $title }}"
    description="{{ $description }}"
    keywords="legal notice, privacy policy, terms of service, cookie policy"
    author="STICKnoLOGIC"
    image="{{ asset('images/legal-og-image.png') }}"
    jsonLd='
    "mainEntity": {
        "@type": "WebPage",
        "name": "{{ $title }}",
        "description": "{{ $description }}",
        "url": "{{ config("app.url") . "/" . ltrim(request()->path(), "/") }}",
        "author": {
            "@type": "Person",
            "name": "STICKnoLOGIC"
        },
        "image": "{{ asset("images/legal-og-image.png") }}"
    }'
>
<section class="py-12 mx-auto max-w-7xl prose prose-invert prose-headings:text-[var(--secondary)] prose-links:text-blue-500 prose-strong:text-[var(--primary)] px-6">
        {!! $content !!}
</section>
</x-layouts.app>