<footer class="border-t border-zinc-800 mt-32 mb-8 md:mb-16">

    <div class="max-w-6xl mx-auto px-6 py-12 text-center">

        <p class="text-zinc-300">
            © {{ now()->year== '2026' ? '2026' : '2026-' . now()->year }} STICKnoLOGIC.
            Built with Laravel and Tailwind CSS.
        </p>
        <div class="mt-2 space-x-4 mx-auto text-center">
            <a href="/terms-of-service" class="text-[var(--primary)] hover:underline">Terms of Service</a>
            <a href="/privacy-policy" class="text-[var(--primary)] hover:underline">Privacy Policy</a>
            <a href="/disclaimer" class="text-[var(--primary)] hover:underline">Disclaimer</a>
        </div>

        {{-- Umami Opt-Out Link --}}
        <a href="javascript:void(0)" class="js-lcc-settings-toggle underline text-[var(--secondary)] mt-4 inline-block">
            Analytic Settings
        </a>
        
        <p class="mt-4 text-xs">
            Server Location: Montreal, Canada | Owner Location: Philippines
        </p>

    </div>

</footer>