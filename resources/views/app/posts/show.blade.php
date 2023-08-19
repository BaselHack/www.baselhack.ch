@extends('app.layouts.default')

@section('content')
    <x-page :title="$post->title" :teaser="$post->teaser">
        <div class="prose prose-lg text-white">
            {!! $post->body !!}
        </div>
    </x-page>
@endsection
