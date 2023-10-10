@if(!empty($posts) && $posts->count())
    <h2 class="mb-4 tracking-tight">Posts</h2>

    @foreach($posts as $post)
        <div class="mb-4 md:flex">
            <div class="mt-8 md:mt-0">
                <div class="tracking-wide uppercase ">
                    <span class="text-sm font-bold text-blue-600">{{ $post->published_at->diffForHumans() }}</span>
                    <span class="text-xs font-light text-gray-300">{{ 'by ' . $post->author->name }}</span>
                </div>
                <h3 class="block mt-1 leading-tight">
                    {{ $post->title }}
                </h3>
                <p class="mt-2 text-gray-300">{{ $post->teaser }}</p>
                <div class="mt-2">
                    <a href="{{ route('posts.show', $post) }}"
                       class="inline-block px-4 py-2 mt-4 text-sm font-bold leading-none underline bg-black border rounded text-yellow hover:bg-yellow-accent lg:mt-0">Read</a>
                </div>
            </div>
        </div>
    @endforeach
@endif
