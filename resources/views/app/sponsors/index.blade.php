@extends('app.layouts.default')

@section('content')
    <x-page :title="$title" :teaser="$teaser">
        @include('app.components._sponsors')

        <div class="mt-24 prose prose-lg">
            {!! $body !!}
        </div>
    </x-page>
@endsection
