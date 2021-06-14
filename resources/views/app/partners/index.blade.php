@extends('app.layouts.default')


@section('content')

    <x-page :title="$title" :teaser="$teaser">

        @if(!empty($partners) and $partners->count())
            <div class="mb-12">
                <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                    @foreach($partners as $partner)

                        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                            <a href="{{ $partner->url }}" target="_blank"
                               class="max-h-12 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out">
                                @if($partner->image)
                                    <img class="max-h-12" src="{{ $partner->getImage() }}" alt="{{ $partner->name }}">
                                @else
                                    <span class="">{{ \Illuminate\Support\Str::upper($partner->name) }}</span>
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="prose prose-lg">
            {!! $body !!}
        </div>
    </x-page>

@endsection
