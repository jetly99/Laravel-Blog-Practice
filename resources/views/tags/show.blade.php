<x-app>
        @if ($posts->count())
            <h1 class="mt-10 text-3x1 font=semibold">Tagged {{ $tag }}</h1>
           
            <x-post-items :posts="$posts" />
        @endif

</x-app>