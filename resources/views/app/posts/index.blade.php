@extends('app.layouts.default')

@section('styles')
@endsection

@section('content')
    <div class="mt-12 md:mt-24">
        <x-page :title="$title" :teaser="$teaser">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                @foreach($posts as $post)
                    <a href="{{ route('posts.show',$post) }}" class="flex flex-col gap-2 p-6 border rounded group border-neutral-800 blog-post bg-neutral-900">
                        <span class="pb-4 text-xs transition-colors duration-300 border-b border-dashed group-hover:text-yellow-600 text-neutral-300 border-neutral-700">
                            <time datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format("d.m.Y") }}</time>
                        </span>
                        <div class="inline-block pb-4 mb-4 transition-colors duration-300 border-b border-dashed group-hover:text-yellow-600 border-neutral-700">
                            <h1 class="mb-2 text-xl font-bold">{{ $post->title }}</h1>
                            <small class="text-xs transition-colors duration-300 text-neutral-300 group-hover:text-yellow-600">{{ $post->teaser }}</small>
                        </div>
                        <div class="flex items-center gap-4 mt-auto">
                            <span class="transition-colors duration-300 group-hover:text-yellow-600">Read story</span>
                            <svg class="w-5 transition-colors duration-300 group-hover:text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>
        </x-page>
    </div>
@endsection
