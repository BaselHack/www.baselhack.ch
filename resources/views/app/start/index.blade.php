@extends('app.layouts.default')
@section('content')
    <main>
        <div class="text-center">
            <div class="mt-12 ld:mt-16 lg:mt-28 lg:mb-16">
                <h1 class="max-w-screen-xl mx-auto mt-12 text-4xl leading-tight uppercase md:text-7xl">Save the Date</h1>
                <h2 id="descryption-text" class="max-w-screen-xl mx-auto mt-4 text-xl leading-tight md:text-4xl md:mt-8">
                    <span>28. / 29. October 2023</span><br>
                    HDW, Pratteln
                </h2>
            </div>

            @include('app.components._cta')

            <div class="flex flex-col items-center justify-center p-8 mb-12 lg:my-18">
                <div class="flex items-center w-full h-6 max-w-xs gap-5 mx-auto mb-12" role="separator">
                    <div class="flex-1 bg-white h-0.5"></div>
                    <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                    <div class="flex-1 bg-white h-0.5"></div>
                </div>
                <h1 class="max-w-3xl mb-6 text-2xl leading-tight md:text-4xl">We connect people, take fun seriously and grow open innovation</h1>
                <p class="max-w-3xl text-lg leading-normal text-center">
                    BaselHack is the hackathon for Basel, Northwestern Switzerland and bordering Alsace and
                    Südbaden. Young and young-at-heart developers, technology fanatics, designers and others meet for a
                    weekend tinkering and developing various ideas. Join us for a weekend full of fun, challenges, for
                    meeting new friends and to enjoy free drinks & foods.
                </p>
            </div>

            @include('app.components._countdown')

            @include('app.components._sponsors')

            {{-- @include('app.components._image-text') --}}

            {{--<div class="flex flex-wrap justify-center gap-6 mt-6 md:mt-12">
                <a target="_blank"
                    href="https://eventfrog.ch/en/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html#ticket-container"
                    class="inline-block px-6 py-2 m-2 text-sm font-bold text-black border rounded-md border-yellow md:text-base bg-yellow hover:bg-yellow-accent">
                    Register Ticket</a>
                <a href="{{ asset('files/baselhack-2022.ics') }}"
                    class="inline-block px-6 py-2 m-2 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md md:text-base hover:bg-gray-400">
                    Add to Calendar</a>
                <a href="#more" class="focus:bg-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500 w-full md:w-auto px-4 py-2 rounded-md cursor-pointer bg-gradient-to-tr hover:from-yellow-500 transition-colors hover:to-yellow-500 from-[#efe73e] to-[#50b1bf] text-black">Learn More</a>
                <a href="{{ route('posts.index') }}" class="focus:bg-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500 w-full md:w-auto px-4 py-2 rounded-md cursor-pointer bg-gradient-to-tr hover:from-yellow-500 transition-colors hover:to-yellow-500 from-[#efe73e] to-[#50b1bf] text-black">Latest News</a>
            </div>--}}
        </div>

        {{-- @include('app.components._timetable') --}}

        {{-- @include('app.components._faq') --}}
        </div>
    </main>
@endsection
