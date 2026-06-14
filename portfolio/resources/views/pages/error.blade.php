<x-layouts.app title="Page Not Found - STICKnoLOGIC"
    description="Sorry, the page you are looking for could not be found."
    image="{{ asset('images/404.png') }}">
    <section class="max-w-6xl mx-auto mb-4 p-6 flex flex-col items-center">
        <img src="{{ asset('images/404.png') }}" alt="404 Not Found" class="mx-auto my-6">
        <p class="font-light mt-4">Sorry, the page you are looking for could not be found.</p>
        <a href="{{ route('home') }}" class="bg-[var(--primary)] text-white px-4 py-2 rounded-md hover:bg-[var(--secondary)] mt-4">Go Back Home</a>
    </section>
</x-layouts.app>