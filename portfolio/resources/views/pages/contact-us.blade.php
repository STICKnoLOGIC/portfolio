<x-layouts.app title="Contact Us - STICKnoLOGIC" 
    description="Have questions, feedback, or just want to say hello? We'd love to hear from you! Whether you're interested in collaborating, have a suggestion for our content, or simply want to connect, feel free to reach out. Your thoughts and inquiries are always welcome!" 
    keywords="contact, email, social media, feedback, questions, collaboration" 
    author="STICKnoLOGIC" 
    image="https://github.com/STICKnoLOGIC/STICKnoLOGIC/blob/main/static/contact.webp?raw=true"
    jsonLd='"@type": "WebPage",
        "name": "Contact Us - STICKnoLOGIC",
        "description": "Have questions, feedback, or just want to say hello? We would love to hear from you! Whether you are interested in collaborating, have a suggestion for our content, or simply want to connect, feel free to reach out. Your thoughts and inquiries are always welcome!",
        "url": "{{ config("app.url") . "/" . request()->path() }}"'>
    <section class="max-w-6xl mx-auto mb-4 p-6">
        <x-section-title :id=null
            title="Contact Us"
            subtitle="Have questions, feedback, or just want to say hello? We'd love to hear from you! Whether you're interested in collaborating, have a suggestion for our content, or simply want to connect, feel free to reach out. Your thoughts and inquiries are always welcome!"
        />  
    <img src="https://github.com/STICKnoLOGIC/STICKnoLOGIC/blob/main/static/contact.webp?raw=true" alt="Contact Us" class="w-full h-auto rounded-lg shadow-md mt-6">
    <p class="text-center text-gray-400 mt-4">Feel free to reach out to us with any questions, comments, or inquiries. We're here to help and would love to hear from you!</p>
    <div class="flex flex-wrap justify-center items-center gap-6 mt-8">
        <a href="mailto:JohnAerial.Azcune@sticknologic.is-a.dev" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fas fa-envelope mr-2"></i><span class="hidden md:inline"> Email Us</span></a>
        <a href="https://snl.is-a.dev/linkedin" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-linkedin mr-2"></i><span class="hidden md:inline"> LinkedIn</span></a>
        <a href="https://snl.is-a.dev/github" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-github mr-2"></i><span class="hidden md:inline"> GitHub</span></a>
        <a href="https://snl.is-a.dev/itchio" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fas fa-gamepad mr-2"></i><span class="hidden md:inline"> Itch.io</span></a>
        <a href="https://snl.is-a.dev/discord" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-discord mr-2"></i><span class="hidden md:inline"> Discord</span></a>
        <a href="https://snl.is-a.dev/youtube" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-youtube mr-2"></i><span class="hidden md:inline"> YouTube</span></a>
        <a href="https://snl.is-a.dev/reddit" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-reddit mr-2"></i><span class="hidden md:inline"> Reddit</span></a>
        <a href="https://snl.is-a.dev/bsky" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-bluesky mr-2"></i><span class="hidden md:inline"> Bluesky</span></a>
        <a href="https://snl.is-a.dev/x" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-twitter mr-2"></i><span class="hidden md:inline"> Twitter</span></a>
        <a href="https://snl.is-a.dev/instagram" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-instagram mr-2"></i><span class="hidden md:inline"> Instagram</span></a>
        <a href="https://snl.is-a.dev/facebook" target="_blank" class="bg-[var(--primary)] text-white px-4 py-2 rounded hover:bg-orange-500 transition"><i class="fab fa-facebook mr-2"></i><span class="hidden md:inline"> Facebook</span></a>
    </div>
</section>
</x-layouts.app>