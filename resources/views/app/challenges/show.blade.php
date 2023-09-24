@extends('app.layouts.default')

@section('content')
    <div class="container my-12 md:my-20">
        <div class="prose prose-lg text-white">
            <h1 class="text-5xl">{{ $challenge->title }}</h1>
            <h2 class="font-normal">{{ $challenge->subtitle }}</h2>
            <hr class="my-8 border-neutral-700">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <h2 class="text-[1.1rem]">
                    <span class="font-light">Challenge Sponsor: </span>
                    <strong>{{ $challenge->company->name }}</strong>
                </h2>
                <h2 class="text-[1.1rem]">
                    <span class="font-light">Price Money: </span>
                    <strong>1'000 CHF</strong>
                </h2>
            </div>
            <hr class="my-8 border-neutral-700">
            <div class="mt-8">{!! $challenge->description !!}</div>            
        </div>
    </div>
@endsection
