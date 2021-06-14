@extends('app.layouts.default.php')


@section('content')

    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-8 px-4 sm:pt-12 sm:px-6 lg:px-8 lg:flex lg:justify-between">

            <div>
                <div>
                    <nav class="sm:hidden">
                        <a href="{{ route('start.index') }}" class="flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
                            <svg class="flex-shrink-0 -ml-1 mr-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Back
                        </a>
                    </nav>
                    <nav class="hidden sm:flex items-center text-sm leading-5 font-medium">
                        <a href="{{ route('start.index') }}" class="text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">Back</a>
                        <!-- Heroicon name: chevron-right -->
                        <svg class="flex-shrink-0 mx-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">{{ $post->title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>


        <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-4 px-4 sm:pt-6 sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="">
                <div class="text-lg max-w-prose mx-auto mb-6">
                    <h1 class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                        {{ $post->title }}
                    </h1>
                    <p class="text-xl text-gray-500 leading-8">
                        {{ $post->teaser }}
                    </p>
                </div>
                <div class="prose prose-lg text-gray-500 mx-auto">
                    {!! $post->body !!}
                </div>
            </div>

        </div>

    </div>

@endsection
