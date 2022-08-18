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
                <h2 class="text-xl font-bold mb-8">Annual Reports</h2>
                <ul>
                    <li>
                        <a href="/pdfs/baselhack-jahresbericht-2021.pdf">Annual Report 2021 (in German, PDF, 9.6 MB)</a>
                    </li>
                </ul>
            </div>
        </div>
    </x-page>

@endsection
