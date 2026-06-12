<nav class="fixed bottom-0 w-full md:sticky md:bottom-auto md:top-0 z-50 border-t md:border-b md:border-t-0 border-[var(--border)] bg-[var(--surface)]">
    <div class="max-w-7xl mx-auto px-4">

    <input type="checkbox" id="menu-toggle" class="peer hidden">
    
    <div class="flex items-center h-16">

        <a href="/" class="flex items-center gap-2 group font-bold hover:text-[var(--primary)] transition aria-label="STICKnoLOGIC's Home">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto hidden md:block">
            <span class="text-border border-black text-sm sm:text-xl">STICK<span class="text-[var(--primary)] group-hover:text-white transition">no</span>LOGIC</span>
        </a>

        <div class="md:hidden w-full flex justify-end gap-4 items-center">
                <a href="/projects" class="has-tooltip hover:text-[var(--primary)] transition {{ request()->routeIs('projects*')
                ? 'text-[var(--primary)] font-bold text-xl'
                : 'text-white hover:text-[var(--primary)]' }}" aria-label="Projects"><i class="fa-regular fa-file-code" alt="Projects"></i><span class="tooltip text-sm rounded p-1 bg-zinc-800 text-[var(--secondary)] -mt-8 -ml-4">Projects</span></a>
                <a href="/case-studies" class="has-tooltip hover:text-[var(--primary)] transition {{ request()->routeIs('case-studies*')
                ? 'text-[var(--primary)] font-bold text-xl'
                : 'text-white hover:text-[var(--primary)]' }}" aria-label="Case Studies"><i class="fa-solid fa-magnifying-glass-chart" alt="Case Studies"></i><span class="tooltip text-sm rounded p-1 bg-zinc-800 text-[var(--secondary)] -mt-8 -ml-4">Case Studies</span></a>
                <a href="/blog" class="has-tooltip hover:text-[var(--primary)] transition {{ request()->routeIs('blog*')
                ? 'text-[var(--primary)] font-bold text-xl'
                : 'text-white hover:text-[var(--primary)]' }}" aria-label="Blog"><i class="fa-regular fa-newspaper" alt="Blog"></i><span class="tooltip text-sm rounded p-1 bg-zinc-800 text-[var(--secondary)] -mt-8 -ml-4">Blog</span></a>
                <a href="/creative" class="has-tooltip hover:text-[var(--primary)] transition {{ request()->routeIs('creative*')
                ? 'text-[var(--primary)] font-bold text-xl'
                : 'text-white hover:text-[var(--primary)]' }}" aria-label="Creative"><i class="fa-solid fa-palette" alt="Creative"></i><span class="tooltip  text-sm rounded p-1 bg-zinc-800 text-[var(--secondary)] -mt-8 -ml-4">Creative</span></a>
                <a href="/about" class="has-tooltip flex flex-col hover:text-[var(--primary)] transition {{ request()->routeIs('about*')
                ? 'text-[var(--primary)] font-bold text-xl'
                : 'text-white hover:text-[var(--primary)]' }}" aria-label="About"><span class="tooltip text-sm rounded p-1 bg-zinc-800 text-[var(--secondary)] -mt-8 -ml-4">About</span><i class="fa-regular fa-user" alt="About"></i></a>
            
        </div>

        <div class=" hidden md:flex w-full justify-end space-x-6 gap-6 text-sm">
            <a href="/projects" class="card-hover hover:text-[var(--primary)] transition {{ request()->routeIs('projects*')
            ? 'text-[var(--primary)] font-bold'
            : 'text-white hover:text-[var(--primary)]' }} aria-label="Projects">Projects</a>
            <a href="/case-studies" class="card-hover hover:text-[var(--primary)] transition {{ request()->routeIs('case-studies*')
            ? 'text-[var(--primary)] font-bold'
            : 'text-white hover:text-[var(--primary)]' }} aria-label="Case Studies">Case Studies</a>
            <a href="/blog" class="card-hover hover:text-[var(--primary)] transition {{ request()->routeIs('blog*')
            ? 'text-[var(--primary)] font-bold'
            : 'text-white hover:text-[var(--primary)]' }} aria-label="Blog">Blog</a>
            <a href="/creative" class="card-hover hover:text-[var(--primary)] transition {{ request()->routeIs('creative*')
            ? 'text-[var(--primary)] font-bold'
            : 'text-white hover:text-[var(--primary)]' }} aria-label="Creative">Creative</a>
            <a href="/about" class="card-hover hover:text-[var(--primary)] transition {{ request()->routeIs('about*')
            ? 'text-[var(--primary)] font-bold'
            : 'text-white hover:text-[var(--primary)]' }} aria-label="About">About</a>
        </div>

    </div>
</nav>