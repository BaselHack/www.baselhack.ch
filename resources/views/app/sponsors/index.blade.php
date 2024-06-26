@extends('app.layouts.default')

@section('content')
    <x-page :title="$title" :teaser="$teaser">
        <div class="mt-24 prose prose-lg">
            {!! $body !!}
        </div>
    </x-page>

    @include('app.components._sponsors')
@endsection
