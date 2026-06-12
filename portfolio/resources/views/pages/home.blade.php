<x-layouts.app title="STICKnoLOGIC - Dev Portfolio" 
    description="Welcome to my personal portfolio website! I'm STICKnoLOGIC, a passionate web developer and digital creator. Here you'll find a showcase of my projects, blog posts, and creative works. I specialize in building modern, responsive websites and applications using the latest technologies. Feel free to explore my work and get in touch if you'd like to collaborate or just say hello!" 
    keywords="STICKnoLOGIC, portfolio, web developer, projects, blog, creative work, digital creator, responsive design, modern web development" 
    author="STICKnoLOGIC">

    <x-hero />

    <section class="max-w-6xl mx-auto px-6 py-24">

        @if($projects->isNotEmpty())
            <x-section-title id="projects"
                title="## Featured Projects"
                subtitle="Some of the projects below are things I'm really trying to build and develop."
            />

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 my-4 mb-8 md:my-12">
                 @foreach($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        @endif
        
        @if($posts->isNotEmpty())
        <x-section-title id="blog"
            title="## Latest Blog Posts"
            subtitle="I write about design, development, and creativity. Here are some of my latest posts."
        />
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 my-4">
            @foreach($posts as $post)
                <a href="{{ route('blog.show', $post['slug']) }}" class="card-hover text-sm md:text-xl font-semibold block p-4 text-[var(--secondary)] hover:text-orange-500 transition">
                    ### {{ $post['title'] }}
                    <i class="fas fa-arrow-right text-[var(--primary)] ml-2"></i>
                </a>
            @endforeach
        </div>
        @endif

        @if($artworks->isNotEmpty())
            <x-section-title id="artworks"
                title="## Featured Artworks"
                subtitle="Some of the artworks below are things I'm really trying to build and develop."
            />
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 my-12">
                @foreach($artworks as $artwork)
                    <x-artwork-card :artwork="$artwork" />
                @endforeach
            </div>
        @endif

    </section>

</x-layouts.app>