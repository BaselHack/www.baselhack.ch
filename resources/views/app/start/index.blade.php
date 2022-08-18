@extends('app.layouts.default')

@section('content')

    <!-- just a comment -->
    <main class="mx-auto max-w-7xl px-4 bg-black text-white">
        <div class="text-center">
            <div class="mt-24">
                <h1 class="mt-12 text-4xl max-w-screen-xl">BaselHack 2022</h1>
                <h2 class="mt-4 text-base">22. & 23. October 2022</h2>
                <p class="mt-1 text-base">Haus der Wirtschaft, Hardstrasse 1, 4133 Pratteln</p>
                <div class="mt-12 flex justify-center">
                    <p class="text-left max-w-2xl">
                        BaselHack is the hackathon for Basel, Northwestern Switzerland and bordering Alsace and Südbaden.
                        Young and young-at-heart developers, technology fanatics, designers and others meet for a weekend
                        tinkering and developing various ideas. Join us for a weekend full of fun, challenges, for meeting
                        new friends and to enjoy free drinks & foods.
                    </p>
                </div>
                <div class="mt-12 text-center">
                    <a target="_blank"
                       href="https://eventfrog.ch/de/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html#ticket-container"
                       class="inline-block px-6 py-2 m-2 border border-yellow text-sm md:text-base font-bold rounded-md text-black bg-yellow hover:bg-yellow-accent">
                        Register Ticket</a>
                    <a href="{{ asset('files/baselhack-2022.ics') }}"
                       class="inline-block px-6 py-2 m-2 border border-transparent text-sm md:text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400">
                        Add to Calendar</a>
                    <a href="#more"
                       class="hidden md:inline-block px-6 py-2 m-2 border border-transparent text-sm md:text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400">
                        Learn More</a>
                </div>
            </div>

            <div class="mt-24">
                <div class="flex items-center justify-center">
                    <iframe src="https://player.vimeo.com/video/633003007?h=67fce8f4ff" style="max-width: 100vw;" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="mt-1">Impressions from BaselHack 2021, Launchlabs, Basel</p>
            </div>

            <div class="mt-40 flex justify-center">
                <a id="more" name="more" class="mb-4"></a>
                <h2 class="mt-4 text-4xl max-w-screen-xl">The BaselHack in a Nutshell</h2>
            </div>

            <div class="flex justify-center">
                <img class="w-auto" src="{{ asset('images/app/baselhack-in-a-nutshell.png') }}"
                     alt="Baselhack in a nutshell (infographic)">
            </div>

{{--            <div class="max-w-2xl mx-auto">--}}

{{--                @include('app.archived.main_posts')--}}

{{--                --}}{{--                <h2 class="text-xl tracking-tight text-white sm:text-xl md:text-2xl">--}}
{{--                --}}{{--                    <span class="hack-font-regular block xl:inline">We are more than a Hackathon. We connect people, take fun seriously and grow open innovation.</span>--}}
{{--                --}}{{--                </h2>--}}
{{--            </div>--}}


        </div>


{{--        <div class="my-24 text-center">--}}
{{--            @include('app.components._sponsors')--}}
{{--        </div>--}}

    </main>

@endsection
