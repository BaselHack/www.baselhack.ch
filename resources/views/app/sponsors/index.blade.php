@extends('app.layouts.default')

@section('styles')

@endsection
@section('content')


    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-8 px-4 sm:pt-12 sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="">
                <h1 class="text-4xl leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl">
                    {{ __('app/sponsors.navigation') }}
                </h1>
            </div>
        </div>
    </div>

    @if(!empty($sponsors) and $sponsors->count())

        <div class="bg-white">
            <div class="max-w-screen-xl mx-auto pt-12 px-4 sm:px-6 lg:pt-16 lg:px-8">

                <div class="text-left">
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                        {{ __('app/sponsors.title') }}
                    </h3>
                    <p class="mt-4 text-xl leading-7 text-gray-500">
                        {{ __('app/sponsors.subtitle') }}
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-0.5 md:grid-cols-2 lg:mt-8">
                    @foreach($sponsors as $sponsor)
                        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50 hover:bg-gray-100">
                            <a href="{{ $sponsor->url }}" target="_blank"
                               class="max-h-18 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out">
                                @if($sponsor->image)
                                    <img class="max-h-16" src="{{ $sponsor->getImage() }}" alt="{{ $sponsor->name }}">
                                @else
                                    <span class="">{{ \Illuminate\Support\Str::upper($sponsor->name) }}</span>
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    @endif

    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-16 px-4 sm:pt-24 sm:px-6 lg:px-8">

            <div class="text-left">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    {{ __('app/sponsors.collaboration.title') }}
                </h3>
                <p class="mt-4 text-xl leading-7 text-gray-500">
                    {{ __('app/sponsors.collaboration.body') }}
                </p>
            </div>

            <div class="mt-8 sm:flex">
                <div class="mt-3 sm:mt-0">
                    <a href="{{ route('contact.index') }}" class="flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-gray-700 bg-gray-100 hover:text-gray-600 hover:bg-gray-50 focus:outline-none focus:shadow-outline focus:border-gray-300 transition duration-150 ease-in-out">
                        {{ __('app/sponsors.collaboration.button') }}
                    </a>
                </div>
            </div>

        </div>
    </div>


@endsection
