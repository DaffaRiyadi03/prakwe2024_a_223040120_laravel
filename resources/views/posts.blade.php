<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-grey-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold  text-grey-900">{{ $post['tittle'] }} 1</h2>
            </a>

            <div>
                <a href="/authors/{{ $post->author->username }}"
                    class="text-base text-grey-500">{{ $post->author->name }}</a>
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>

            <a href="/posts/{{ $post['slug'] }}" class="text-base text-grey-500">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
