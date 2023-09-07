@extends('app.layouts.default')

@section('content')
    <div class="container mt-8 mb-16">
        <div class="grid grid-cols-1 py-8 md:grid-cols-8 md:py-16">
            <div class="col-span-1 md:col-span-2">
                <div class="bg-[#080808] p-8">
                    <div class="mb-2 text-sm text-neutral-300">Sponsor</div>
                    <strong class="block text-lg">{{ $challenge->company->name }}</strong>
                    <hr class="my-4 border-neutral-500">
                    <a class="flex items-center gap-4 mt-4 group" href="#">
                        <svg class="w-5 h-5 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                        <span class="group-hover:text-yellow-500">Download Data (4MB)</span>
                    </a>
                </div>
            </div>
            <div class="col-span-1 border-l border-neutral-800 md:col-span-6">
                <div class="prose prose-lg text-white bg-[#080808] p-8">
                    <div class="mb-2 text-sm text-neutral-300">Challenge</div>
                    <strong class="block mb-2 text-xl">{{ $challenge->title }}</strong>
                    <div class="mb-8">{{ $challenge->subtitle }}</div>
                    <div>{!! $challenge->description !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
