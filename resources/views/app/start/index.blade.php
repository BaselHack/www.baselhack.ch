@extends('app.layouts.default')

@section('content')

    <main class="mx-auto max-w-7xl px-4">
        <div class="text-center">

            <img class="w-1/4 mx-auto" src="{{ asset('images/app/logos/baselhack_color.svg') }}"
                 alt="{{ config('app.name') }}">
            <div class="max-w-2xl mx-auto">
                <h1 class="text-xl tracking-tight text-gray-900 font-bold sm:text-2xl md:text-3xl">
                    BaselHack &mdash; 11. & 12. September 2021
                </h1>
                <h2 class="text-xl tracking-tight text-gray-900 sm:text-xl md:text-2xl">
                    Launchlabs (Gundeldingerfeld), Basel
                </h2>
                <div class="block">
                    <a href="https://eventfrog.ch/de/events.html?searchTerm=baselhack" target="_blank" class="inline-block mb-8 underline">
                        Register yout ticket
                    </a> |
                    <a href="/blog/registrations-open-for-baselhack-2021" class="inline-block mb-8 underline">
                        More information
                    </a>
                </div>
                <h2 class="text-xl tracking-tight text-gray-900 sm:text-xl md:text-2xl">
                    <span class="block xl:inline">We are more than a Hackathon. We connect people, take fun seriously and grow open innovation.</span>
                </h2>
            </div>

            <div class="max-w-2xl mx-auto mt-8">
                <h2 class="font-bold text-lg">Main Sponsors</h2>
                <div class="block text-center">
                    <a href="https://www.actemium.ch/" target="_blank">
                        <img class="inline-block w-1/3 h-auto" src="{{ asset('images/app/sponsors/actemium.png') }}" alt="Actemium">
                    </a>
                    <a href="https://www.coop.ch/" target="_blank">
                        <img class="inline-block w-1/3 h-auto" src="{{ asset('images/app/sponsors/coop.png') }}" alt="Coop">
                    </a>
                </div>
                <h2 class="font-bold text-lg mt-4 mb-4">Sponsors</h2>
                <div class="block text-center mb-16">
                    <a href="https://www.baloise.ch/" target="_blank">
                        <img class="inline-block w-1/5 h-auto" src="{{ asset('images/app/sponsors/basler-versicherungen.png') }}" alt="Basler Versicherungen">
                    </a>
                    <a href="https://www.damarismeier.ch/" target="_blank">
                        <img class="inline-block w-1/5 h-auto" src="{{ asset('images/app/sponsors/damaris-meier.png') }}" alt="Damaris Meier Personalberatung">
                    </a>
                    <a href="https://www.helvetia.com/" target="_blank">
                        <img class="inline-block w-1/5 h-auto" src="{{ asset('images/app/sponsors/helvetia.png') }}" alt="Helvetia Versicherungen">
                    </a>
                    <a href="https://www.elca.ch/" target="_blank">
                        <img class="inline-block w-1/5 h-auto" src="{{ asset('images/app/sponsors/elca-informatik.png') }}" alt="ELCA Informatik">
                    </a>
                </div>
            </div>

            <div class="mt-4 max-w-xl mx-auto sm:flex sm:justify-center space-y-4 sm:space-y-0 sm:space-x-4 md:mt-8">
                <div class="rounded-md shadow">
                    <a
                        href="https://eventfrog.ch/de/events.html?searchTerm=baselhack"
                        target="_blank"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 md:py-4 md:text-lg md:px-10"
                        style="background: #18FFF2"
                    >
                        Register
                    </a>
                </div>
                <div class="rounded-md shadow">
                    <a href="{{ route('posts.index') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 md:py-4 md:text-lg md:px-10">
                        News
                    </a>
                </div>
                <div class="rounded-md shadow">
                    <a href="{{ route('contact.index') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-600 bg-gray-100 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                        Contact
                    </a>
                </div>
            </div>
        </div>


        @if(!empty($post))
            <div class="mt-12">
                <div class="relative max-w-3xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16  rounded-lg bg-gray-400 text-center">
                    <div class="">
                        <h2 class="text-base font-semibold uppercase tracking-wider text-gray-50">
                            {{ $post->published_at?->diffForHumans() }}
                        </h2>
                        <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">
                            {{ $post->title }}
                        </p>
                        <p class="mt-3 text-lg text-gray-50">
                            {{ $post->teaser }}
                        </p>
                        <div class="mt-8">
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('posts.show', $post) }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>

@endsection
