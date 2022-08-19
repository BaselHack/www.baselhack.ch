@extends('app.layouts.default')

@section('styles')
@endsection

@section('content')

    <x-page :title="$title" :teaser="$teaser">
        <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-400 lg:max-w-7xl">
            <div class="grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
                @foreach($posts as $post)
                    <div>
                        <p class="text-sm leading-5 text-gray-300">
                            <time datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->diffForHumans() }}</time>
                        </p>
                        <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-200">
                            {{ $post->title }}
                        </h3>
                        <p class="mt-3 text-base leading-6 text-gray-400">
                            {{ $post->teaser }}
                        </p>
                        <div class="mt-3">
                            <a href="{{ route('posts.show',$post) }}"
                               class="text-base leading-6 text-teal hover:text-teal-accent">
                                {{ __('app/start.news.more') }}
                            </a>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </x-page>

@endsection
