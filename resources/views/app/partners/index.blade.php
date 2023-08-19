@extends('app.layouts.default')

@section('content')
    <x-page :title="$title" :teaser="$teaser">
        @if(!empty($partnerships) and $partnerships->count())
            <div class="mb-12">
                <div class="grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                    @foreach($partnerships as $partner)
                        <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
                            <a href="{{ $partner->url }}" target="_blank"
                               class="text-gray-300 max-h-12 hover:text-white">
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
