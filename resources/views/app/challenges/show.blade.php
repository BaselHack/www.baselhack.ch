@extends('app.layouts.default')

@section('content')
    <x-page :title="$challenge->title" :teaser="$challenge->teaser">
        
        @include('app.components._cta')

        <span>Challenge by: {{ $challenge->company->name }}</span>
        
        <div class="my-8 prose prose-lg text-white">
            Challenge Description: <br>
            {!! $challenge->description !!}
        </div>
    </x-page>
@endsection
