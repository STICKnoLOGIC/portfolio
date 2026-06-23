<x-layouts.app title="Write With Us - STICKnoLOGIC"
    description="We are always looking for talented writers to contribute to our blog. If you have a passion for writing and want to share your knowledge with our audience, we would love to hear from you!"
    keywords="write with us, contribute, blog, article submission, writing opportunities, become a contributor, share your knowledge, STICKnoLOGIC"
    author="STICKnoLOGIC"
    image="{{ asset('images/write-with-us-og.png') }}"
    jsonLd='"@type": "WebPage",
        "name": "Write With Us - STICKnoLOGIC",
        "description": "We are always looking for talented writers to contribute to our blog. If you have a passion for writing and want to share your knowledge with our audience, we would love to hear from you!",
        "url": "{{ config("app.url") . "/" . request()->path() }}"'>
    <section class="py-12 mx-auto max-w-7xl">
        <div class="container mx-auto px-4">
            <h1 class="text-6xl font-bold mb-6 text-center text-[var(--primary)]">Write With Us</h1>
            <iframe style="border:none;width:100%;height:700px;max-height:90vh;" id="contact-us-snl" src="{{ config('app.opnform_write_with_us')}}"></iframe>
        </div>
    </section>
</x-layouts.app>