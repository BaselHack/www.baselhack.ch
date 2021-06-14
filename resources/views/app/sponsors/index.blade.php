@extends('app.layouts.default')


@section('content')

    <x-page :title="$title" :teaser="$teaser">

        @if(!empty($sponsors) and $sponsors->count())
            <div class="mb-12">
                <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                    @foreach($sponsors as $sponsor)

                        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                            <a href="{{ $sponsor->url }}" target="_blank"
                               class="max-h-12 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out">
                                @if($sponsor->image)
                                    <img class="max-h-12" src="{{ $sponsor->getImage() }}" alt="{{ $sponsor->name }}">
                                @else
                                    <span class="">{{ \Illuminate\Support\Str::upper($sponsor->name) }}</span>
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
