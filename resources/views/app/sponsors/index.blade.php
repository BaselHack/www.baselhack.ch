@extends('app.layouts.default')

@section('content')
    <x-page :title="$title" :teaser="$teaser">
        <div class="mt-24 prose prose-lg">
            {!! $body !!}
        </div>
        @include('app.components._sponsors')
    </x-page>
@endsection
