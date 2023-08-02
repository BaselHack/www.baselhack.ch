@extends('app.layouts.default')

@section('content')

    <main>
        <div class="text-center">
            <!--
            <div class="mt-12 ld:mt-16 lg:mt-20">
                <h1 class="max-w-screen-xl mt-12 text-4xl leading-tight uppercase md:text-7xl">Save the Date</h1>
                <h2 id="descryption-text" class="max-w-screen-xl mt-6 text-xl leading-tight md:text-4xl md:mt-3">
                    <span>28. / 29. October 2023</span><br>
                    HDW, Pratteln
                </h2>
            </div>
            -->

            @include('app.components._countdown')

            @include('app.components._cta')

            <div class="flex flex-col items-center justify-center my-12">
                <h1 class="max-w-3xl mb-8 text-4xl leading-tight">BaselHack is more than a hackathon – we connect people, take fun seriously and grow open innovation</h1>
                <p class="max-w-3xl text-lg leading-normal text-center">
                    BaselHack is the hackathon for Basel, Northwestern Switzerland and bordering Alsace and
                    Südbaden. Young and young-at-heart developers, technology fanatics, designers and others meet for a
                    weekend tinkering and developing various ideas. Join us for a weekend full of fun, challenges, for
                    meeting new friends and to enjoy free drinks & foods.
                </p>
            </div>

            @include('app.components._sponsors')

            <!-- @include('app.components._image-text') -->
            

            <!-- <div class="flex flex-wrap justify-center gap-6 mt-6 md:mt-12">
                <!--<a target="_blank"
                    href="https://eventfrog.ch/en/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html#ticket-container"
                    class="inline-block px-6 py-2 m-2 text-sm font-bold text-black border rounded-md border-yellow md:text-base bg-yellow hover:bg-yellow-accent">
                    Register Ticket</a>-->
                <!--<a href="{{ asset('files/baselhack-2022.ics') }}"
                    class="inline-block px-6 py-2 m-2 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md md:text-base hover:bg-gray-400">
                    Add to Calendar</a>-->
                <!-- <a href="#more" class="focus:bg-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500 w-full md:w-auto px-4 py-2 rounded-md cursor-pointer bg-gradient-to-tr hover:from-yellow-500 transition-colors hover:to-yellow-500 from-[#efe73e] to-[#50b1bf] text-black">Learn More</a>
                <a href="{{ route('posts.index') }}" class="focus:bg-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500 w-full md:w-auto px-4 py-2 rounded-md cursor-pointer bg-gradient-to-tr hover:from-yellow-500 transition-colors hover:to-yellow-500 from-[#efe73e] to-[#50b1bf] text-black">Latest News</a>
            </div> -->
        </div>

        @include('app.components._timetable')

        @include('app.components._faq')

        <!--
        <div class="flex justify-center mt-20 md:mt-28">
            <a id="more" name="more" class="mb-4"></a>
            <h2 class="max-w-screen-xl mb-4 text-4xl">The BaselHack in a Nutshell</h2>
        </div>

        <div class="flex justify-center">
            <img class="w-auto mix-blend-lighten" src="{{ asset('images/app/baselhack-in-a-nutshell.png') }}"
                    alt="Baselhack in a nutshell (infographic)">
        </div>
        -->

<!--
{{--            <div class="max-w-xl mx-auto mt-4 space-y-4 sm:flex sm:justify-center sm:space-y-0 sm:space-x-4 md:mt-8">--}}

{{--                <div class="rounded-md shadow">--}}
{{--                    <a href="https://eventfrog.ch/de/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html#ticket-container"--}}
{{--                       class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white bg-gray-600 border border-transparent rounded-md hover:bg-gray-400 md:py-4 md:text-lg md:px-10">--}}
{{--                        Register now--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="rounded-md shadow">--}}
{{--                    <a href="{{ route('sponsors.index') }}"--}}
{{--                       class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white bg-gray-600 border border-transparent rounded-md hover:bg-gray-400 md:py-4 md:text-lg md:px-10">--}}
{{--                        Sponsor--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

            {{--            <div class="max-w-2xl mx-auto">--}}
            {{--                @include('app.archived.main_posts')--}}
            {{--                --}}{{--                <h2 class="text-xl tracking-tight text-white sm:text-xl md:text-2xl">--}}
            {{--                --}}{{--                    <span class="block hack-font-regular xl:inline">We are more than a Hackathon. We connect people, take fun seriously and grow open innovation.</span>--}}
            {{--                --}}{{--                </h2>--}}
            {{--            </div>--}}
-->
            
            <!--
            <div class="flex items-center justify-center">
                <div class="mt-4 mb-12">
                    <p>Impressions from BaselHack 2022, Haus der Wirtschaft, Pratteln</p>
                    <iframe style="width: 100%; max-width: 900px; height: 450px;" src="https://www.youtube.com/embed/THE--6AYbEY" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                </div>
                
                <div class="my-4">
                    <p>Impressions from BaselHack 2021, Launchlabs, Basel</p>
                    <iframe style="width: 100%; height: 355px;" src="https://player.vimeo.com/video/633003007?h=67fce8f4ff" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            -->
        </div>
    </main>
@endsection
