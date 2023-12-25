<x-app>
        @if ($posts->count())
            <h1 class="mt-10 text-3x1 font=semibold">Latest post by {{ $authorName }}</h1>
           
            <x-post-items :posts="$posts" />
        @endif

</x-app>