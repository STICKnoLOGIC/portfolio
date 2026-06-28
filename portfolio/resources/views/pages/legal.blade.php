<x-layouts.app title="{{ $title }}"
    description="{{ $description }}"
    keywords="legal notice, privacy policy, terms of service, cookie policy"
    author="STICKnoLOGIC"
    image="{{ asset('images/legal-og.png') }}"
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
        "image": "{{ asset("images/legal-og.png") }}"
    }'
>
<section class="max-w-6xl mx-auto px-6 py-24 prose prose-invert prose-headings:text-[var(--secondary)] prose-a:text-[#FFDAB9] prose-strong:text-[var(--primary)]">
        {!! $content !!}
</section>
</x-layouts.app>