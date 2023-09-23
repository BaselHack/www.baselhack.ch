@extends('app.layouts.default')

@section('content')
    @include('app.components._sponsors')
    <x-page :title="$title" :teaser="$teaser">
        <div class="mt-24 prose prose-lg">
            {!! $body !!}
        </div>
    </x-page>
@endsection
