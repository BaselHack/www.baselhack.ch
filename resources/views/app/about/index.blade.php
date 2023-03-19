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
                <h2 class="mb-8">Annual Reports</h2>
                <ul>
                    <li>
                        <a href="{{ asset('pdfs/baselhack-jahresbericht-2022.pdf') }}">
                            Annual Report 2022 (in German, PDF)
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('pdfs/baselhack-jahresbericht-2021.pdf') }}">
                            Annual Report 2021 (in German, PDF)
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2021#jahresbericht"
                           target="_blank">
                            Annual Report 2020 (in German, on GitHub)
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2020#jahresbericht"
                           target="_blank">
                            Annual Report 2019 (in German, on GitHub)
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2019#jahresbericht"
                           target="_blank">
                            Annual Report 2018 (in German, on GitHub)
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/BaselHack/Verein/wiki/Mitgliederversammlung-BaselHack-2018#jahresbericht"
                           target="_blank">
                            Annual Report 2017 (in German, on GitHub)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </x-page>

@endsection
