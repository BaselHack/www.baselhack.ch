@extends('app.layouts.default')

@section('content')

    <x-page :title="$title" :teaser="$teaser">
        <div class="">
            <div class="prose prose-lg">
                {!! $body !!}
            </div>

            @if(!empty($channels) and $channels->count())
                <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                    @foreach($channels as $channel)
                        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50 hover:bg-gray-200 duration-150 ease-in-out">
                            <a href="{{ $channel->url }}" target="_blank"
                               class="max-h-12 text-gray-300 hover:text-white">
                                <i class="{{ $channel->icon }} fa-3x"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </x-page>

@endsection
