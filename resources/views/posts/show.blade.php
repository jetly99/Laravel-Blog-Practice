<x-app>

    <div class="mt-10 space-y-5 prose prose-lg max-w-none">
        <h1 class="no-underline">{{ $post->title }} </h1>
        <x-post-meta :post="$post" />
        <div> {{ $post->contents }}</div>
    </div>


</x-app>