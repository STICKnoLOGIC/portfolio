<x-layouts.app title="Write With Us - STICKnoLOGIC"
    description="We are always looking for talented writers to contribute to our blog. If you have a passion for writing and want to share your knowledge with our audience, we would love to hear from you!"
    keywords="write with us, contribute, blog, article submission, writing opportunities, become a contributor, share your knowledge, STICKnoLOGIC"
    author="STICKnoLOGIC"
    image="{{ asset('images/write-with-us-og.jpg') }}"
    jsonLd='"@type": "WebPage",
        "name": "Write With Us - STICKnoLOGIC",
        "description": "We are always looking for talented writers to contribute to our blog. If you have a passion for writing and want to share your knowledge with our audience, we would love to hear from you!",
        "url": "{{ env("APP_URL") . "/" . request()->path() }}"'>
    <section class="py-12 mx-auto max-w-7xl">
        <div class="container mx-auto px-4">
            <h1 class="text-6xl font-bold mb-6 text-center text-[var(--primary)]">Write With Us</h1>
            <p class="mb-4">We are always looking for talented writers to contribute to our blog. If you have a passion for writing and want to share your knowledge with our audience, we would love to hear from you!</p>
            <p class="mb-4">To submit your article, please send an email to <a href="mailto:writewithus@sticknologic.is-a.dev" class="text-[var(--primary)] hover:underline">writewithus@sticknologic.is-a.dev</a>.</p>
            <p class="mb-4">Please include the following information and files in your email:</p>
            <ul class="list-disc list-inside mb-4">
                <li>MarkDown file with Your name and a brief bio, here are the reference or sample files: <a href="https://github.com/sticknologic/portfolio/tree/main/content/author/sticknologic.md?plain=1" class="text-[var(--primary)] hover:underline">Sample Bio</a></li>
                <li>MarkDown file of your article, here are the reference or sample files: <a href="https://github.com/sticknologic/portfolio/tree/main/content/blog/hello-world.md?plain=1" class="text-[var(--primary)] hover:underline">Sample Article</a></li>
                <li>A summary of your article idea</li>
                <li>Any relevant writing samples or links to your previous work</li>
            </ul>
            <p class="mb-4">We are looking for articles that are informative, engaging, and relevant to our audience. We welcome a wide range of topics, including but not limited to technology, programming, software development, and industry trends.</p>
            <p class="mb-4">We will review your submission and get back to you within 2-3 weeks.</p>
            <p class="mb-4">Thank you for your interest in writing with us! We look forward to hearing from you.</p>
        </div>
    </section>
</x-layouts.app>