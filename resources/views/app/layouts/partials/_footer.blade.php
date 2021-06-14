<footer class="bg-white">
    <div class="max-w-screen-xl mx-auto py-16 px-4 overflow-hidden space-y-8 sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
            <div class="px-5 py-2">
                <a href="{{ route('start.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.start') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('posts.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.posts') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('team.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.team') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('sponsors.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.sponsors') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('partners.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.partners') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('positions.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.positions') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('contact.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.contact') }}
                </a>
            </div>
        </nav>

        <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
            <div class="px-5 py-2">
                <a href="{{ route('privacy.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.privacy') }}
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="{{ route('terms.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    {{ __('app/layouts.terms') }}
                </a>
            </div>
        </nav>

        <div class="mt-8 flex justify-center space-x-6">
            @if(!empty($channels) and $channels->count())
                @foreach($channels as $channel)
                    <a href="{{ $channel->url }}" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">
                          {{ $channel->name }}
                        </span>
                        <span class="h-12 w-auto">
                          <i class="{{ $channel->icon }} fa-lg"></i>
                        </span>
                    </a>
                @endforeach
            @endif
        </div>

        <p class="mt-8 text-center text-base leading-6 text-gray-400 hover:text-gray-500">
            <a rel="nofollow" href="{{ \Laravel\Nova\Nova::path() }}">
                &copy; {{ date('Y')}} BaselHack. All rights reserved.
            </a>
        </p>

    </div>
</footer>

