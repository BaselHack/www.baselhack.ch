@if(!empty($posts) && $posts->count())
    <div class="text-black font-bold text-xl tracking-tight mb-4">
        <span>Posts</span>
    </div>

    @foreach($posts as $post)
        <div class="md:flex mb-4">
            <div class="mt-4 md:mt-0">

                <div class="uppercase tracking-wide ">

                    <span class="text-sm text-blue-600 font-bold">{{ $post->published_at->diffForHumans() }}</span>

                    <span class="text-xs text-gray-300 font-light">{{ 'by ' . $post->author->name }}</span>

                </div>

                <span class="block mt-1 text-xl leading-tight font-semibold text-white">
                        {{ $post->title }}
                    </span>

                <p class="mt-2 text-gray-300">{{ $post->teaser }}</p>

                <div class="mt-2">
                    <a href="{{ route('posts.show', $post) }}"
                       class="inline-block text-sm font-bold px-4 py-2 leading-none border rounded bg-black text-white hover:bg-gray-200 mt-4 lg:mt-0">Read</a>
                </div>
            </div>
        </div>
    @endforeach

@endif
