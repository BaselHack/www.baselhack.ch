@extends('app.layouts.default')

@section('content')
    <x-page :title="$title" :teaser="$teaser">
        <div class="">
            <div class="prose prose-lg">
                {!! $body !!}
            </div>

            <div class="my-12">
                <h2 class="mb-8 text-2xl font-bold">The Team behind BaselHack</h2>
                <div class="grid grid-cols-1 md:grid-cols-3">
                    @foreach($teams as $key => $team)
                        <article class="flex flex-col items-center justify-center gap-2 p-4 bg-neutral-800">
                            <img class="mb-2 rounded-full" src="https://via.placeholder.com/250x250" alt="">
                            <div class="text-center">
                                <h1 class="text-lg">{{ $team->name }}</h1>
                                <div>{{ $team->funktion }}</div>
                                <div>IWF Web Solutions</div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            @if(!empty($channels) and $channels->count())
                <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                    @foreach($channels as $channel)
                        <div class="flex justify-center col-span-1 px-8 py-8 duration-150 ease-in-out bg-gray-50 hover:bg-gray-200">
                            <a href="{{ $channel->url }}" target="_blank"
                               class="text-gray-300 max-h-12 hover:text-white">
                                <i class="{{ $channel->icon }} fa-3x"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </x-page>
@endsection
