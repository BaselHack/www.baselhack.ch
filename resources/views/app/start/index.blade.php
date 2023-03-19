@extends('app.layouts.default')

@section('content')

    <main class="mx-auto max-w-7xl px-4 bg-black text-white">
        <div class="text-center">
            <div class="mt-12 ld:mt-16 lg:mt-24">
                <h1 class="mt-12 text-4xl max-w-screen-xl">BaselHack 2022</h1>
                <p class="mt-4 text-base">BaselHack 2022 took place on 22. & 23. October 2022 at Haus der Wirtschaft,
                    Pratteln</p>

                <!--<h2 class="mt-4 text-base">22. & 23. October 2022</h2>-->
                <!--<p class="mt-1 text-base">Haus der Wirtschaft, Hardstrasse 1, 4133 Pratteln</p>-->

                <div class="mt-6">
                    <div class="flex items-center justify-center">
                        <iframe src="https://www.youtube.com/embed/THE--6AYbEY" style="max-width: 100vw;" width="640"
                                height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>

                </div>


                <h2 class="mt-24 text-4xl max-w-screen-xl">About BaselHack</h2>
                <div class="mt-6 flex justify-center">
                    <p class="text-left max-w-2xl">
                        BaselHack is the hackathon for Basel, Northwestern Switzerland and bordering Alsace and
                        Südbaden.
                        Young and young-at-heart developers, technology fanatics, designers and others meet for a
                        weekend
                        tinkering and developing various ideas. Join us for a weekend full of fun, challenges, for
                        meeting
                        new friends and to enjoy free drinks & foods.
                    </p>
                </div>
                <div class="mt-12 text-center">
                    <!--<a target="_blank"
                       href="https://eventfrog.ch/en/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html#ticket-container"
                       class="inline-block px-6 py-2 m-2 border border-yellow text-sm md:text-base font-bold rounded-md text-black bg-yellow hover:bg-yellow-accent">
                        Register Ticket</a>-->
                    <!--<a href="{{ asset('files/baselhack-2022.ics') }}"
                       class="inline-block px-6 py-2 m-2 border border-transparent text-sm md:text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400">
                        Add to Calendar</a>-->
                    <a href="#more"
                       class="inline-block px-6 py-2 m-2 border border-gray-600 text-sm md:text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400">
                        Learn More</a>
                    <a href="{{ route('posts.index') }}"
                       class="inline-block px-6 py-2 m-2 border border-yellow text-sm md:text-base font-bold rounded-md text-black bg-yellow hover:bg-yellow-accent">
                        Latest News
                    </a>
                </div>
            </div>

            <div class="mt-40 flex justify-center">
                <a id="more" name="more" class="mb-4"></a>
                <h2 class="mt-4 text-4xl max-w-screen-xl">The BaselHack in a Nutshell</h2>
            </div>

            <div class="flex justify-center">
                <img class="w-auto" src="{{ asset('images/app/baselhack-in-a-nutshell.png') }}"
                     alt="Baselhack in a nutshell (infographic)">
            </div>


            <div class="mt-4 max-w-xl mx-auto sm:flex sm:justify-center space-y-4 sm:space-y-0 sm:space-x-4 md:mt-8">

                <div class="rounded-md shadow">
                    <a href="https://eventfrog.ch/de/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html#ticket-container"
                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400 md:py-4 md:text-lg md:px-10">
                        Register now
                    </a>
                </div>
                <div class="rounded-md shadow">
                    <a href="{{ route('sponsors.index') }}"
                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400 md:py-4 md:text-lg md:px-10">
                        Sponsor
                    </a>
                </div>
            </div>

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
                    <iframe src="https://player.vimeo.com/video/633003007?h=67fce8f4ff" width="640" height="360"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </main>

@endsection
