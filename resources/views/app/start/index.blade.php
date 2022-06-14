@extends('app.layouts.default')

@section('content')

    <!-- just a comment -->
    <main class="mx-auto max-w-7xl px-4 bg-black text-white">
        <div class="text-center">

            <div class="flex justify-center">
                <h1 class="text-4xl max-w-screen-xl">BaselHack 2022</h1>
            </div>
            <div class="flex justify-center">
                <p class="block">22. & 23. October at Haus der Wirtschaft, Pratteln</p>
            </div>

            <br>
            <br>

            <div class="flex justify-center">
                <img class="w-auto" src="{{ asset('images/app/baselhack-in-a-nutshell.png') }}"
                     alt="Baselhack in a nutshell (infographic)">
            </div>



            <div class="mt-4 max-w-xl mx-auto sm:flex sm:justify-center space-y-4 sm:space-y-0 sm:space-x-4 md:mt-8">

                <div class="rounded-md shadow">
                    <a href="https://eventfrog.ch/de/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html#ticket-container" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400 md:py-4 md:text-lg md:px-10">
                        Register now
                    </a>
                </div>
                <div class="rounded-md shadow">
                    <a href="{{ route('sponsors.index') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400 md:py-4 md:text-lg md:px-10">
                        Sponsor
                    </a>
                </div>
            </div>

<<<<<<< HEAD
        <div class="my-24 text-center">
            @include('app.components._sponsors')
=======
            <br>
            <br>

{{--            <div class="max-w-2xl mx-auto">--}}

{{--                @include('app.archived.main_posts')--}}

{{--                --}}{{--                <h2 class="text-xl tracking-tight text-white sm:text-xl md:text-2xl">--}}
{{--                --}}{{--                    <span class="hack-font-regular block xl:inline">We are more than a Hackathon. We connect people, take fun seriously and grow open innovation.</span>--}}
{{--                --}}{{--                </h2>--}}
{{--            </div>--}}

            <div class="flex justify-center">
                <div>
                    <p>Impressions from BaselHack 2021, Launchlabs, Basel</p>
                    <iframe src="https://player.vimeo.com/video/633003007?h=67fce8f4ff" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

>>>>>>> production
        </div>


{{--        <div class="my-24 text-center">--}}
{{--            @include('app.components._sponsors')--}}
{{--        </div>--}}

    </main>

@endsection
