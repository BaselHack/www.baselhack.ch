@extends('app.layouts.app')

@section('content')

      <main class="mt-4 mx-auto max-w-screen-xl px-4 sm:mt-6 sm:px-6 md:mt-10 xl:mt-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            <div class="text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">
              13. November 2020
            </div>
            <h2 class="mt-1 text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
             BaselHack <span class="font-medium">meets</span>  <span class="text-blue-800">Climathon</span>
            </h2>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                {{ __('app/start.subtitle') }}
            </p>

              <div class="mt-5">
                  <a target="_blank" href="{{ config('baselhack.sign_up_url') }}" class="mt-5 px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-800 hover:bg-blue-900 focus:outline-none focus:border-blue-700 focus:shadow-outline-gray active:bg-blue-700 transition ease-in-out duration-150">
                      {{ __('app/laoutys.sign_up') }}
                  </a>
              </div>

          </div>
          <div class="hidden lg:visible mt-10 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
            <div class="relative mx-auto w-full rounded-lg lg:max-w-md">
               <span class="relative block w-full  ">
            <img class="w-full" src="{{ asset('images/app/logos/baselhack_color.svg') }}" alt="{{ config('app.name') }}">
          </span>
            </div>
          </div>
        </div>
      </main>

    <div class="bg-white">
        <div class="max-w-screen-xl mx-auto pt-12 px-4 sm:px-6 lg:pt-16 lg:px-8">

            <div class="text-left">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    {{ __('app/start.news.title') }}
                </h3>
            </div>

            <div class="relative max-w-lg mx-auto lg:max-w-7xl">

                <div class="mt-6 grid gap-16 pt-10 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">

                    @foreach($posts as $post)

                        <div>
                            <p class="text-sm leading-5 text-gray-500">
                                <time datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->diffForHumans() }}</time>
                            </p>
                            <a href="#" class="block">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    {{ $post->title }}
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    {{ $post->teaser }}
                                </p>
                            </a>
                            <div class="mt-3">
                                <a href="{{ route('posts.show',$post) }}" class="text-base leading-6 font-semibold text-gray-800 hover:text-gray-500 transition ease-in-out duration-150">
                                    {{ __('app/start.news.more') }}
                                </a>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>


@endsection
