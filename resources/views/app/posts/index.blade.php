@extends('app.layouts.default')

@section('styles')
@endsection

@section('content')
    <x-page :title="$title" :teaser="$teaser">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($posts as $post)
                <article class="flex flex-col gap-2 p-6 border border-teal-900 rounded-lg blog-post bg-neutral-900">
                    <span class="text-neutral-300"><time datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format("d.m.Y") }}</time></span>
                    <a class="inline-block mb-4" href="{{ route('posts.show',$post) }}">
                        <h1 class="text-xl font-bold">{{ $post->title }}</h1>
                        <small class="text-neutral-300">{{ $post->teaser }}</small>
                    </a>
                    <a class="focus:bg-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500 flex items-center self-start gap-2 px-4 py-2 mt-auto mt-4 bg-gradient-to-tr hover:from-yellow-500 transition-colors hover:to-yellow-500 from-[#efe73e] to-[#50b1bf] text-black rounded-md" href="{{ route('posts.show',$post) }}">
                        <span>{{ __('app/start.news.more') }}</span>
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                </article>
            @endforeach
        </div>
    </x-page>
@endsection
