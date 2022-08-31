<footer class="footer bg-gray-800 mt-12 py-12">
    <div class="max-w-screen-xl mx-auto py-8 px-4 overflow-hidden space-y-8 sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
            <div class="px-5 py-2">
                <a href="{{ route('start.index') }}" class="text-base leading-6 text-gray-300 hover:text-white">
                    {{ __('app/layouts.start') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('about.index') }}" class="text-base leading-6 text-gray-300 hover:text-white">
                    {{ __('app/layouts.about') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('challenges.index') }}" class="text-base leading-6 text-gray-300 hover:text-white">
                    {{ __('app/layouts.challenges') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('sponsors.index') }}" class="text-base leading-6 text-gray-300 hover:text-white">
                    {{ __('app/layouts.sponsors') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('posts.index') }}" class="text-base leading-6 text-gray-300 hover:text-white">
                    {{ __('app/layouts.posts') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('team.index') }}" class="text-base leading-6 text-gray-300 hover:text-white">
                    {{ __('app/layouts.team') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('contact.index') }}" class="text-base leading-6 text-gray-300 hover:text-white">
                    {{ __('app/layouts.contact') }}
                </a>
            </div>
        </nav>

        <div class="my-8 flex justify-center space-x-8">
            @if(!empty($channels) and $channels->count())
                @foreach($channels as $channel)
                    <a href="{{ $channel->url }}" title="{{ $channel->name }}" target="_blank" class="channel h-12 w-12 py-4 bg-gray-700 text-gray-400 rounded-full overflow-hidden hover:bg-white">
                        <span class="sr-only">
                          {{ $channel->name }}
                        </span>
                        <span class="flex justify-center">
                          <i class="icon inline-block {{ $channel->icon }} fa-lg"></i>
                        </span>
                    </a>
                @endforeach
            @endif
        </div>

        <p class="mt-12 pt-8 text-center text-sm text-gray-500">
            &copy; {{ date('Y')}} BaselHack. All rights reserved.
        </p>

        <div class="-mx-4 flex flex-wrap justify-center">
            <div class="px-5">
                <a href="{{ route('privacy.index') }}" class="text-sm leading-6 text-gray-500 hover:text-white">
                    {{ __('app/layouts.privacy') }}
                </a>
            </div>
            <div class="px-5">
                <a href="{{ route('terms.index') }}" class="text-sm leading-6 text-gray-500 hover:text-white">
                    {{ __('app/layouts.terms') }}
                </a>
            </div>
        </div>
    </div>
</footer>
