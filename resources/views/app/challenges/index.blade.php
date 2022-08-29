@extends('app.layouts.default')


@section('content')

    <x-page :title="$title" :teaser="$teaser">
        <div class="prose prose-lg">
            {!! $body !!}
        </div>
    </x-page>

@endsection
