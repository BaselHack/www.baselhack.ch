@extends('app.layouts.default')


@section('content')

    <x-page :title="$positions" :teaser="$teaser">
        @if(!empty($positions) and $positions->count())

            <div class="text-left">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    {{ __('app/positions.title') }}
                </h3>
                <p class="mt-4 text-xl leading-7 text-gray-500">
                    {{ __('app/positions.subtitle') }}
                </p>
            </div>

            <div class="mt-8">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">

                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('app/positions.table.position') }}
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('app/positions.table.published_at') }}
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach($positions as $position)

                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap">
                                                <div class="flex items-center">
                                                    @if($position->company->image)
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full"
                                                                 src="{{ $position->company->getImage() }}"
                                                                 alt="{{ $position->company->name }}">
                                                        </div>
                                                    @endif

                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">
                                                            {{ $position->company->name }}
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">
                                                            {{ $position->company->type }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap">
                                                <div class="text-sm leading-5 font-bold text-black">
                                                    {{ $position->title }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                {{ $position->published_at->diffForHumans() }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                <a href="{{ route('positions.show', $position) }}"
                                                   class="text-black-600 hover:text-black-900">
                                                    {{ __('app/positions.table.button') }}
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
            </div>
        @endif
    </x-page>

@endsection
