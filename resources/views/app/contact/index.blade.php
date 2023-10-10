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
