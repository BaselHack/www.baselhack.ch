@extends('app.layouts.default')

@section('styles')
@endsection

@section('content')
    <x-page :title="$title" :teaser="$teaser">
        <div class="">
            <div class="prose prose-lg">
                {!! $body !!}
            </div>
            <div class="mt-24 mb-8">
                <h2 class="mb-4 text-2xl">Annual Reports</h2>
                <div class="grid grid-cols-1 divide-y divide-white">
                    <a class="flex items-center gap-3 py-4 hover:text-yellow-500" href="{{ asset('pdfs/baselhack-jahresbericht-2022.pdf') }}" target="_blank">
                        <svg class="w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                        <span>Annual Report 2022 (in German, PDF)</span>
                    </a>

                    <a class="flex items-center gap-3 py-4 hover:text-yellow-500" href="{{ asset('pdfs/baselhack-jahresbericht-2021.pdf') }}" target="_blank">
                        <svg class="w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                        <span>Annual Report 2021 (in German, PDF)</span>
                    </a>

                    <a class="flex items-center gap-3 py-4 hover:text-yellow-500" href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2021#jahresbericht" target="_blank">
                        <svg class="w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                        <span>Annual Report 2020 (in German, on GitHub)</span>
                    </a>

                    <a class="flex items-center gap-3 py-4 hover:text-yellow-500" href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2020#jahresbericht" target="_blank">
                        <svg class="w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                        <span>Annual Report 2019 (in German, on GitHub)</span>
                    </a>

                    <a class="flex items-center gap-3 py-4 hover:text-yellow-500" href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2019#jahresbericht" target="_blank">
                        <svg class="w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                        <span>Annual Report 2018 (in German, on GitHub)</span>
                    </a>

                    <a class="flex items-center gap-3 py-4 hover:text-yellow-500" href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2018#jahresbericht" target="_blank">
                        <svg class="w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                        <span>Annual Report 2017 (in German, on GitHub)</span>
                    </a>
                </div>
            </div>
        </div>
    </x-page>
@endsection
