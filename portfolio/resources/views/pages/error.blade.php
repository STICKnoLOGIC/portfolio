<x-layouts.app>
    <section class="max-w-6xl mx-auto mb-4 p-6 flex flex-col items-center">
        <img src="{{ asset('images/404.png') }}" alt="404 Not Found" class="mx-auto my-6">
        <h1 class="text-4xl md:text-6xl lg:text-8xl font-extrathin mt-4">404</h1>
        <p class="font-light">Sorry, the page you are looking for could not be found.</p>
        <a href="{{ route('home') }}" class="bg-[var(--primary)] text-white px-4 py-2 rounded-md hover:bg-[var(--secondary)] mt-4">Go Back Home</a>
    </section>
</x-layouts.app>