@extends('app.layouts.default')


@section('content')

    <x-page :title="$title" :teaser="$teaser">

        @include('app.components._sponsors')

        <div class="prose prose-lg">
            {!! $body !!}
        </div>
    </x-page>

@endsection
