@extends('app.layouts.default')


@section('content')

    <x-page :title="$post->title" :teaser="$post->teaser">
        <div class="prose prose-lg text-gray-300">
            {!! $post->body !!}
        </div>
    </x-page>

@endsection
