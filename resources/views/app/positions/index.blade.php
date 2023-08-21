@extends('app.layouts.default')

@section('content')
    <x-page :title="$title" :teaser="$teaser">
        @if(!empty($positions) and $positions->count())
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full border-white divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase bg-gray-500">

                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase bg-gray-500">
                                        Position
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-white uppercase bg-gray-500">
                                        Published at
                                    </th>
                                    <th class="px-6 py-3 bg-gray-500"></th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">

                                @foreach($positions as $position)

                                    <tr class="text-white bg-gray-500">
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                @if($position->company->image)
                                                    <div class="flex-shrink-0 h-10">
                                                        <img class="h-10 rounded-full"
                                                                src="{{ $position->company->getImage() }}"
                                                                alt="{{ $position->company->name }}">
                                                    </div>
                                                @endif

                                                <div class="ml-12">
                                                    <div class="text-sm font-medium leading-5">
                                                        {{ $position->company->name }}
                                                    </div>
                                                    <div class="text-sm leading-5">
                                                        {{ $position->company->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <div class="text-sm font-bold leading-5 ">
                                                {{ $position->title }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 text-sm leading-5 text-gray-300 whitespace-no-wrap">
                                            {{ $position->published_at->diffForHumans() }}
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap">
                                            <a href="{{ route('positions.show', $position) }}"
                                                class="text-black-600 hover:text-black-900">
                                                Show
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </x-page>
@endsection
