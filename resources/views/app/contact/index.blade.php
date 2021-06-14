@extends('app.layouts.default')

@section('styles')

@endsection
@section('content')

    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-8 px-4 sm:pt-12 sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="">
                <h1 class="text-4xl leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl">
                    {{ __('app/contact.navigation') }}
                </h1>
            </div>
        </div>
    </div>


        <div class="bg-white">
            <div class="max-w-screen-xl mx-auto pt-12 px-4 sm:px-6 lg:pt-16 lg:px-8">

                <div class="text-left">
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                        {{ __('app/contact.channels.title') }}
                    </h3>
                    <p class="mt-4 text-xl leading-7 text-gray-500">
                        {{ __('app/contact.channels.subtitle') }}
                    </p>
                </div>

                @if(!empty($channels) and $channels->count())

                <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                    @foreach($channels as $channel)

                        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50 hover:bg-gray-100 duration-150 ease-in-out">
                            <a href="{{ $channel->url }}" target="_blank"
                               class="max-h-12 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out">
                                <i class="{{ $channel->icon }} fa-3x"></i>
                            </a>
                        </div>
                    @endforeach
                </div>

                @endif
            </div>
        </div>


    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-16 px-4 sm:pt-24 sm:px-6 lg:px-8">

            <div class="text-left">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    {{ __('app/contact.imprint.disclaimer.title') }}
                </h3>
                <p class="mt-4 text-xl leading-7 text-gray-500">
                    {{ __('app/contact.imprint.disclaimer.body') }}
                </p>
            </div>

        </div>
    </div>


@endsection
