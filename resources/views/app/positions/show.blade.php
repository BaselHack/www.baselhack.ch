@extends('app.layouts.default')


@section('content')



    <div class="bg-black text-white">
        <div class="max-w-screen-xl mx-auto pt-8 px-4 sm:pt-12 sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="">
                <a href="{{ route('positions.index') }}"
                   class="text-lg leading-5 font-bold text-gray-500 hover:text-gray-800 sm:text-lg sm:leading-none sm:tracking-tight lg:text-xl">
                     <i class="fad fa-angle-left mr-1"></i> {{ __('app/positions.show.back') }}
                </a>
            </div>
        </div>
    </div>

    <div class="bg-black text-white">
        <div class="max-w-screen-xl mx-auto pt-4 px-4 sm:pt-6 sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="">
                <h1 class="text-4xl leading-10 font-extrabold text-white sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl">
                    {{ $position->title }}
                </h1>
                <p class="mt-4 text-xl leading-7 text-gray-500">
                    Published {{ $position->published_at->diffForHumans() }}
                </p>


                <div class="mt-6">
                    @if($position->company->url)
                        <a target="_blank" href="{{ $position->company->url }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                            More Information about {{ $position->company->name }}
                        </a>
                    @endif

                    @if($position->url)
                        <a target="_blank" href="{{ $position->url }}" class="ml-2 inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-50 focus:outline-none focus:border-green-300 focus:shadow-outline-green active:bg-green-200 transition ease-in-out duration-150">
                            Apply now!
                        </a>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <div class="bg-black text-white ">
        <div class="max-w-screen-xl mx-auto pt-12 px-4 sm:px-6 lg:pt-16 lg:px-8">

            <div class="prose lg:prose-xl">
                {!! $position->body !!}
            </div>

        </div>
    </div>

@endsection
