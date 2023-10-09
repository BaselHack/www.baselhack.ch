@extends('app.layouts.default')

@section('styles')
@endsection

@section('content')
    <div class="mt-12 md:mt-24">
        <x-page :title="$title" :teaser="$teaser">
            <div>
                <div class="prose prose-lg">
                    {!! $body !!}
                </div>

                {{-- TEAM OVERVIEW --}}
                <div class="my-16 space-y-12 md:my-32">
                    <ul class="space-y-16 sm:grid sm:grid-cols-2 sm:gap-20 sm:space-y-0 xl:grid-cols-4 lg:grid-cols-3">
                        @foreach($teams as $key => $person)
                            <li>
                                <div class="space-y-6">
                                    <img class="max-w-[14rem] sm:max-w-full mx-auto sm:mx-none rounded-2xl" src="{{ $person->getProfileImage() }}" alt="{{ $person->name }}">
                                    <div class="space-y-2">
                                        <div class="space-y-1 text-center sm:text-left">
                                            <h4 class="text-lg font-medium">{{ $person->name }}</h4>
                                            <span class="text-sm font-light text-neutral-300">{{ $person->funktion }}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="my-8 md:my-16">
                    <h2 class="mb-2 text-4xl">Annual Reports</h2>
                    <p class="mb-4 text-neutral-400">Since 2017, we publish an annual report.</p>
                    <div class="grid grid-cols-1 divide-y divide-neutral-500">
                        <a class="flex items-center gap-3 py-4 group hover:text-yellow-500" href="{{ asset('pdfs/baselhack-jahresbericht-2022.pdf') }}" target="_blank">
                            <svg class="w-5 h-5 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="transition-all duration-300 group-hover:pl-2">Annual Report 2022 (in German, PDF)</span>
                        </a>
                        <a class="flex items-center gap-3 py-4 group hover:text-yellow-500" href="{{ asset('pdfs/baselhack-jahresbericht-2021.pdf') }}" target="_blank">
                            <svg class="w-5 h-5 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="transition-all duration-300 group-hover:pl-2">Annual Report 2021 (in German, PDF)</span>
                        </a>
                        <a class="flex items-center gap-3 py-4 group hover:text-yellow-500" href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2021#jahresbericht" target="_blank">
                            <svg class="w-5 h-5 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="transition-all duration-300 group-hover:pl-2">Annual Report 2020 (in German, on GitHub)</span>
                        </a>
                        <a class="flex items-center gap-3 py-4 group hover:text-yellow-500" href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2020#jahresbericht" target="_blank">
                            <svg class="w-5 h-5 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="transition-all duration-300 group-hover:pl-2">Annual Report 2019 (in German, on GitHub)</span>
                        </a>
                        <a class="flex items-center gap-3 py-4 group hover:text-yellow-500" href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2019#jahresbericht" target="_blank">
                            <svg class="w-5 h-5 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="transition-all duration-300 group-hover:pl-2">Annual Report 2018 (in German, on GitHub)</span>
                        </a>
                        <a class="flex items-center gap-3 py-4 group hover:text-yellow-500" href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2018#jahresbericht" target="_blank">
                            <svg class="w-5 h-5 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="transition-all duration-300 group-hover:pl-2">Annual Report 2017 (in German, on GitHub)</span>
                        </a>
                    </div>
                </div>
            </div>
        </x-page>
    </div>
@endsection
