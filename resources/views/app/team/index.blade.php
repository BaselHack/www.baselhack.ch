@extends('app.layouts.default')

@section('content')

    <x-page :title="$title" :teaser="$teaser">
        <div class="my-12 prose prose-lg">
            {!! $body !!}
        </div>
        <div class="my-12 space-y-12 text-center">
            <ul class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">
                @foreach($teams as $key => $team)
                    <li>
                        <div class="space-y-6">
                            <img class="w-32 h-32 mx-auto rounded-full xl:w-48 xl:h-48"
                                 src="{{ $team->getProfileImage() }}"
                                 alt="{{ $team->name }}">
                            <div class="space-y-2">
                                <div class="space-y-1">
                                    <h4 class="text-lg font-medium leading-6">{{ $team->name }}</h4>
                                    <span class="text-sm">{{ $team->funktion }}</span>
                                </div>
                                <ul class="flex justify-center space-x-5">

                                    @if($team->profile_website)
                                        <li>
                                            <a target="_blank" href="{{ $team->profile_website }}"
                                               class="text-gray-300 hover:text-white">
                                                <span class="sr-only">Website</span>
                                                <span class="w-5 h-5">
                                    <i class="far fa-link"></i>
                                  </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if($team->profile_github)
                                        <li>
                                            <a target="_blank" href="{{ $team->profile_github  }}"
                                               class="text-gray-300 hover:text-white">
                                                <span class="sr-only">Github</span>
                                                <span class="w-5 h-5">
                                     <i class="fab fa-github"></i>
                                  </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if($team->profile_twitter)
                                        <li>
                                            <a target="_blank" href="{{ $team->profile_twitter  }}"
                                               class="text-gray-300 hover:text-white">
                                                <span class="sr-only">Twitter</span>
                                                <span class="w-5 h-5">
                                     <i class="fab fa-twitter"></i>
                                  </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if($team->profile_linkedin)
                                        <li>
                                            <a target="_blank" href="{{ $team->profile_linkedin  }}"
                                               class="text-gray-300 hover:text-white">
                                                <span class="sr-only">LinkedIn</span>
                                                <span class="w-5 h-5">
                                     <i class="fab fa-linkedin-in"></i>
                                  </span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-page>

    <x-page :title="__('app/alumni.title')" :teaser="__('app/alumni.teaser')">

        <div class="my-12 space-y-12 text-center">
            <ul class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">
                @foreach($alumni as $key => $team)
                    <li>
                        <div class="space-y-6">
                            <img class="w-32 h-32 mx-auto rounded-full xl:w-48 xl:h-48"
                                 src="{{ $team->getProfileImage() }}"
                                 alt="{{ $team->name }}">
                            <div class="space-y-2">
                                <div class="space-y-1 text-lg font-medium leading-6">
                                    <h4>{{ $team->name }}</h4>
                                </div>
                                <ul class="flex justify-center space-x-5">

                                    @if($team->profile_website)
                                        <li>
                                            <a target="_blank" href="{{ $team->profile_website }}"
                                               class="text-gray-300 hover:text-white">
                                                <span class="sr-only">Website</span>
                                                <span class="w-5 h-5">
                                    <i class="far fa-link"></i>
                                  </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if($team->profile_github)
                                        <li>
                                            <a target="_blank" href="{{ $team->profile_github  }}"
                                               class="text-gray-300 hover:text-white">
                                                <span class="sr-only">Github</span>
                                                <span class="w-5 h-5">
                                     <i class="fab fa-github"></i>
                                  </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if($team->profile_twitter)
                                        <li>
                                            <a target="_blank" href="{{ $team->profile_twitter  }}"
                                               class="text-gray-300 hover:text-white">
                                                <span class="sr-only">Twitter</span>
                                                <span class="w-5 h-5">
                                     <i class="fab fa-twitter"></i>
                                  </span>
                                            </a>
                                        </li>
                                    @endif

                                    @if($team->profile_linkedin)
                                        <li>
                                            <a target="_blank" href="{{ $team->profile_linkedin  }}"
                                               class="text-gray-300 hover:text-white">
                                                <span class="sr-only">LinkedIn</span>
                                                <span class="w-5 h-5">
                                     <i class="fab fa-linkedin-in"></i>
                                  </span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-page>
@endsection
