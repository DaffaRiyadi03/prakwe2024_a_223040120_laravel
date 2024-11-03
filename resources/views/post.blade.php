<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>

    <article class="py-8 max-w-screen-md border-b border-grey-300">

        <h2 class="mb-1 text-3xl tracking-tight font-bold  text-grey-900">{{ $post['tittle'] }} 1</h2>

        <div class="text-base text-grey-500 ">
            <a href="{{ $post->author->id }}">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to post</a>
    </article>

</x-layout>
