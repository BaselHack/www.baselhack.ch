@extends('app.layouts.app')

@section('content')

    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-8 px-4 sm:pt-12  sm:px-6 lg:px-8 lg:flex lg:justify-between">
            <div class="">
                <h1 class="text-4xl leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl">
                    {{ __('app/team.navigation') }}
                </h1>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-12 px-4 sm:px-6 lg:pt-16 lg:px-8">

            <div class="text-left">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    {{ __('app/team.title') }}
                </h3>
                <p class="mt-4 text-xl leading-7 text-gray-500">
                    {{ __('app/team.subtitle') }}
                </p>
            </div>

        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">

                <ul class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">

                  @foreach($teams as $key => $team)
                    <li>
                      <div class="space-y-6">
                        <img class="mx-auto h-32 w-32 rounded-full xl:w-48 xl:h-48"
                             src="{{ $team->getProfileImage() }}"
                             alt="{{ $team->name }}">
                        <div class="space-y-2">
                          <div class="text-lg leading-6 font-medium space-y-1">
                            <h4>{{ $team->name }}</h4>
                          </div>
                          <ul class="flex justify-center space-x-5">

                            @if($team->profile_website)
                              <li>
                                <a target="_blank" href="{{ $team->profile_website }}"
                                   class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
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
                                     class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
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
                                   class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
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
                                     class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
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
        </div>
    </div>
@endsection
