<div class="flex flex-wrap mb-1 gap-0">
    @foreach($tags as $tag)
        <a href="{{ route($route, $tag) }}" class="card-hover">
            <i class="fa-solid fa-tag text-[var(--secondary)]"></i>
            <span class="px-1 py-1 text-[var(--primary)] hover:text-orange-500 transition">
                {{ $tag }}
            </span>
        </a>
    @endforeach
</div>