@extends('app.layouts.default')

@section('content')

    <main class="mt-8 mx-auto max-w-7xl px-4 sm:mt-12">
        <div class="text-center">

            <img class="w-1/3 mx-auto" src="{{ asset('images/app/logos/baselhack_color.svg') }}"
                 alt="{{ config('app.name') }}">
            <div class="max-w-2xl mx-auto">
                <h1 class="text-2xl tracking-tight font-bold text-gray-900 sm:text-3xl md:text-4xl">
                    <span class="block xl:inline">We are more than a Hackathon. We connect people, take fun seriously and grow open innovation.</span>
                </h1>
            </div>

            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div class="rounded-md shadow">
                    <a href="{{ route('posts.index') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 md:py-4 md:text-lg md:px-10">
                        Latest news
                    </a>
                </div>
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                    <a href="{{ route('contact.index') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-600 bg-gray-100 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                       Let's connect!
                    </a>
                </div>
            </div>

        </div>
    </main>

@endsection
