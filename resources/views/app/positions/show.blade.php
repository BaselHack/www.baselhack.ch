@extends('app.layouts.default')

@section('content')
    <div>
        <div class="max-w-screen-xl px-4 pt-8 mx-auto sm:pt-12 sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="">
                <a href="{{ route('positions.index') }}"
                   class="text-lg font-bold leading-5 text-gray-300 hover:text-white sm:text-lg sm:leading-none sm:tracking-tight lg:text-xl">
                     <i class="mr-1 fad fa-angle-left"></i> {{ __('app/positions.show.back') }}
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-screen-xl px-4 pt-4 mx-auto sm:pt-6 sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="">
                <h1 class="text-4xl font-extrabold leading-10 text-white sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl">
                    {{ $position->title }}
                </h1>
                <p class="mt-4 text-xl leading-7 text-gray-300">Published {{ $position->published_at->diffForHumans() }}</p>
                <div class="mt-6">
                    @if($position->company->url)
                        <a target="_blank" href="{{ $position->company->url }}" class="inline-flex items-center px-6 py-3 text-base font-medium leading-6 text-blue-700 bg-blue-100 border border-transparent rounded-md hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200">
                            More Information about {{ $position->company->name }}
                        </a>
                    @endif
                    @if($position->url)
                        <a target="_blank" href="{{ $position->url }}" class="inline-flex items-center px-6 py-3 ml-2 text-base font-medium leading-6 text-green-700 bg-green-100 border border-transparent rounded-md hover:bg-green-50 focus:outline-none focus:border-green-300 focus:shadow-outline-green active:bg-green-200">
                            Apply now!
                        </a>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <div class="text-white bg-black ">
        <div class="max-w-screen-xl px-4 pt-12 mx-auto sm:px-6 lg:pt-16 lg:px-8">
            <div class="prose lg:prose-xl">
                {!! $position->body !!}
            </div>
        </div>
    </div>
@endsection
