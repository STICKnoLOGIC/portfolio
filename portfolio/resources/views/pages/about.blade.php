<x-layouts.app title="About Me - STICKnoLOGIC"
    description="Hi, I'm John Aerial J. Azcune, also known as STICKnoLOGIC. I'm a web developer and pixel artist who focuses on building practical tools, creative web experiences, and open-source projects. Since starting my GitHub journey in 2020, I've been consistently exploring development through personal projects, game jams, and community contributions."
    keywords="web development, digital art, pixel art, open source, Laravel, PHP, JavaScript, Aseprite, Photoshop, game jams, front-end, full-stack, GitHub, John Aerial J. Azcune, STICKnoLOGIC, is-a.dev, First Accord, Payus-as-a-Service, Aseprite Builder, snl-typed-js, laravel-ui-lockout, 1-Point-View-Perspective-Guide-Line"
    author="STICKnoLOGIC"
    image="{{ asset('images/about-og.jpg') }}"
    jsonLd='"@type": "ProfilePage",
        "name": "John Aerial J. Azcune (STICKnoLOGIC) - Web Developer & Digital Artist",
        "description": "Hi, I am John Aerial J. Azcune, also known as STICKnoLOGIC. I am a freelance web developer and digital artist who focuses on building practical tools, creative web experiences, and open-source projects.",
        "url": "{{ env("APP_URL") . "/" . request()->path() }}",
        "image": "https://github.com/sticknologic.png",
        "jobTitle": ["Website Developer", "Digital Artist"],
        "knowsAbout": [
            "Web Development",
            "JavaScript",
            "PHP",
            "Laravel",
            "Pixel Art",
            "Sprite Animation",
            "Digital Illustration"
        ],
        "sameAs": [
            "https://github.com/sticknologic",
            "https://www.reddit.com/user/sticknologic",
            "https://x.com/sticknologic",
            "https://facebook.com/sticknologic",
            "https://youtube.com/@sticknologic",
            "https://instagram.com/sticknologic",
            "https://bsky.app/profile/sticknologic.is-a.dev",
            "https://sticknologic.itch.io",
            "https://www.linkedin.com/in/sticknologic"
        ]'>

    <section class="max-w-6xl mx-auto px-6 py-24">
        <div class="flex gap-0 flex-wrap center justify-center mb-12">
            <div class="relative z-10 flex gap-8 items-center flex-wrap justify-center w-48 h-48 overflow-hidden rounded-full mx-auto mb-8 object-cover p-2  border-4 border-[var(--primary)] shadow-lg clip-path-circle">
                <div class="absolute -z-10 inset-0 h-full w-full 
                    bg-[linear-gradient(to_right,var(--primary)_1px,transparent_1px),linear-gradient(to_bottom,var(--primary)_1px,transparent_1px)]
                    [mask-image:radial-gradient(ellipse_50%_40%_at_50%_40%,#000_80%,transparent_100%)]
                    bg-[size:20px_20px]"></div>
                <img src="https://github.com/STICKnoLOGIC.png" class="w-full h-full object-cover" alt="Profile Picture">
            </div>
            <div class="center flex-1 px-6 text-center md:text-left">
                <h1 class="text-4xl font-bold mb-0 group hover:text-[var(--primary)]"><span class="text-border border-black ">STICK<span class="text-[var(--primary)] group-hover:text-white transition">no</span>LOGIC</span></h1>
                <p class="text-xl text-[var(--primary)] mb-1">John Aerial J. Azcune</p>
                <div class="flex gap-4 justify-center flex-wrap md:justify-start">
                    <p class="text-gray-400 italic">Contact me at: </p>
                    <a href="https://snl.is-a.dev/linkedin" target="_blank" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fab fa-linkedin"></i></a>
                    <a href="mailto:JohnAerial.Azcune@sticknologic.is-a.dev" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fas fa-envelope"></i></a>
                    <a href="https://snl.is-a.dev/github" target="_blank" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fab fa-github"></i></a>
                    <a href="https://snl.is-a.dev/itchio" target="_blank" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fas fa-gamepad"></i></a>
                    <a href="https://snl.is-a.dev/discord" target="_blank" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fab fa-discord"></i></a>
                    <a href="https://snl.is-a.dev/x" target="_blank" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fab fa-twitter"></i></a>
                    <a href="https://snl.is-a.dev/bsky" target="_blank" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fab fa-bluesky"></i></a>
                    <a href="https://snl.is-a.dev/instagram" target="_blank" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fab fa-instagram"></i></a>
                    <a href="https://snl.is-a.dev/facebook" target="_blank" class="text-[var(--secondary)] text-lg hover:text-[var(--primary)] transition"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <h1 id="about-me" class="text-4xl text-[var(--secondary)] font-bold mb-6">About Me</h1>

        <p class="text-lg text-gray-300 mb-8">
            Hi, I'm <span class="text-[var(--primary)]">John Aerial J. Azcune</span>, also known online as <span class="text-[var(--primary)]">STICKnoLOGIC</span>.
        </p>

        <p class="text-gray-300 mb-8">
            I'm a web developer and pixel artist who focuses on building practical tools, creative web experiences, and open-source projects. Since starting my GitHub journey in 2020, I've been consistently exploring development through personal projects, game jams, and community contributions.
        </p>

        <p class="text-gray-300 mb-8">
            My primary focus is <span class="text-[var(--primary)]">front-end and full-stack web development</span>, working with <span class="text-[var(--primary)]">Laravel</span>, <span class="text-[var(--primary)]">PHP</span>, and <span class="text-[var(--primary)]">JavaScript</span>. Alongside development, I create pixel art and design assets using <span class="text-[var(--primary)]">Aseprite</span> and <span class="text-[var(--primary)]">Photoshop</span>, often blending technical and visual creativity in my work.
        </p>

        <p class="text-gray-300 mb-8">
            I also contribute actively to open source, both through my own projects and community involvement. I’ve been a <span class="text-[var(--primary)]">maintainer for the <a href="https://github.com/is-a-dev" class="text-[var(--secondary)] hover:underline">is-a.dev</a> organization for over a year</span>, where I handle pull request reviews and approvals, support community discussions through GitHub issues, and help maintain documentation. This experience has strengthened my understanding of collaborative development, code quality, and community-driven projects.
        </p>

        <h2 id="open-source-work" class="text-2xl text-[var(--secondary)] font-bold mb-6">Some of my notable open-source work includes:</h2>

        <ul class="list-disc list-inside text-gray-300 mb-8 space-y-2">
            <li><strong><a href="https://github.com/sticknologic/first-accord" class="text-blue-400 hover:underline">First Accord</a></strong> – helps newcomers make their first GitHub contribution.</li>
            <li><strong><a href="https://github.com/sticknologic/payus-as-a-service" class="text-blue-400 hover:underline">Payus-as-a-Service</a></strong> – an API that generates random invoices in both professional and playful tones.</li>
            <li><strong><a href="https://github.com/sticknologic/aseprite-builder" class="text-blue-400 hover:underline">Aseprite Builder</a></strong> – a GitHub Actions workflow for automated Aseprite dev builds on Windows.</li>
            <li><strong><a href="https://github.com/sticknologic/snl-typed-js" class="text-blue-400 hover:underline">snl-typed-js</a></strong> – a Laravel Blade component package for Typed.js animations.</li>
            <li><strong><a href="https://github.com/sticknologic/laravel-ui-lockout" class="text-blue-400 hover:underline">laravel-ui-lockout</a></strong> – a simple Laravel package for application lockout screens.</li>
            <li><strong><a href="https://github.com/sticknologic/1-Point-View-Perspective-Guide-Line" class="text-blue-400 hover:underline">1-Point-View-Perspective-Guide-Line</a></strong> – an Aseprite extension for generating single-point perspective guides.</li>
        </ul>

        <p class="text-gray-300 mb-8">
            I've also participated in <span class="text-[var(--primary)]">multiple game jams</span>, where I enjoy experimenting with gameplay ideas, rapid prototyping, and combining code with pixel art under time constraints.
        </p>

        <p class="text-gray-300 mb-8">
            Across all my work—whether building web applications, contributing to open source, or creating pixel art—I focus on learning, sharing, and collaborating with others in the developer community.
        </p>

        <p class="text-gray-300 mb-8">
            I'm currently open to <span class="text-[var(--primary)]">freelance opportunities</span>, <span class="text-[var(--primary)]">full-time roles</span>, and meaningful connections with developers, creators, and open-source communities.
        </p>
    </section>
</x-layouts.app>