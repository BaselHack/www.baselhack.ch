@extends('app.layouts.default')

@section('content')
    <div class="container my-12 md:my-20">
        <div>
            <h1 class="mb-1 text-6xl leading-tight">{{ $challenge->title }}</h1>
            <h2 class="text-xl font-normal text-neutral-300">{{ $challenge->subtitle }}</h2>
            <hr class="my-8 border-neutral-700">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <h2 class="text-[1.1rem]">
                    <span class="font-light text-neutral-300">Challenge Sponsor: </span>
                    <strong>{{ $challenge->company->name }}</strong>
                </h2>
                <h2 class="text-[1.1rem]">
                    <span class="font-light text-neutral-300">Price Money: </span>
                    <strong>1'000 CHF</strong>
                </h2>
            </div>
            <hr class="my-8 border-neutral-700">
            <div class="mt-8 prose md:mt-12">{!! $challenge->description !!}</div>
            <hr class="my-8 border-dashed border-neutral-600">
            <a class="flex gap-2 px-4 py-2 text-black bg-yellow-500 rounded w-fit" href="{{ route('challenges.index') }}">
                <i class="bi bi-arrow-left"></i>
                <span>Back to overview</span>
            </a>
        </div>
    </div>
@endsection
