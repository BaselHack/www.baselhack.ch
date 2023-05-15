<nav x-cloak class="container my-12">
    <div class="flex flex-wrap items-center justify-between gap-4">
        <a class="shrink-0" href="{{ route('about.index')}}">
            <img class="h-16" src="https://www.baselhack.ch/images/app/logos/baselhack_white.png" alt="BaselHack" />
        </a>
        <button @click="navOpen = !navOpen" class="text-white transition md:hidden bg-clip-text hover:bg-gradient-to-tr from-yellow-500 to-teal-500" role="button" aria-label="Navigation öffnen">  
            <svg x-show="!navOpen" class="w-7" viewBox="0 0 59 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M56 3H6" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                <path d="M56 17L3 17" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                <path d="M56 32L25 32" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
            </svg>
            <svg x-show="navOpen" class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <ul class="flex-row hidden gap-6 my-8 xl:gap-8 desktop-navigation md:flex">
            <li><a class="{{ request()->routeIs('about.index') ? 'text-yellow-500' : '' }} uppercase transition hover:text-yellow-500" href="{{ route('about.index') }}" href="{{ route('about.index') }}">{{ __('app/layouts.about') }}</a></li>
            <li><a class="{{ request()->routeIs('team.index') ? 'text-yellow-500' : '' }} uppercase transition hover:text-yellow-500" href="{{ route('team.index') }}" href="{{ route('team.index') }}">{{ __('app/layouts.team') }}</a></li>
            <!--<li><a class="{{ request()->routeIs('sponsors.index') ? 'text-yellow-500' : '' }} uppercase transition hover:text-yellow-500" href="{{ route('sponsors.index') }}">{{ __('app/layouts.sponsors') }}</a></li>-->
            <li><a class="{{ request()->routeIs('posts.index') ? 'text-yellow-500' : '' }} uppercase transition hover:text-yellow-500" href="{{ route('posts.index') }}" href="{{ route('posts.index') }}">{{ __('app/layouts.posts') }}</a></li>
            <!--<li><a class="{{ request()->routeIs('contact.index') ? 'text-yellow-500' : '' }} uppercase transition hover:text-yellow-500" href="{{ route('contact.index') }}" href="{{ route('contact.index') }}">{{ __('app/layouts.contact') }}</a></li>-->
        </ul>
    </div>
    <div @click.outside="navOpen = false" x-show="navOpen" class="my-12 rounded mobile-navigation md:hidden" x-transition>
        <ul class="grid grid-cols-1 gap-4 text-center">
            <li><a class="{{ request()->routeIs('about.index') ? 'text-yellow-500' : '' }} text-lg uppercase transition hover:text-yellow-500" href="{{ route('about.index') }}">{{ __('app/layouts.about') }}</a></li>
            <li><a class="{{ request()->routeIs('team.index') ? 'text-yellow-500' : '' }} text-lg uppercase transition hover:text-yellow-500" href="{{ route('team.index') }}">{{ __('app/layouts.team') }}</a></li>
            <!--<li><a class="{{ request()->routeIs('sponsors.index') ? 'text-yellow-500' : '' }} text-lg uppercase transition hover:text-yellow-500" href="{{ route('sponsors.index') }}">{{ __('app/layouts.sponsors') }}</a></li>-->
            <li><a class="{{ request()->routeIs('posts.index') ? 'text-yellow-500' : '' }} text-lg uppercase transition hover:text-yellow-500" href="{{ route('posts.index')}}">{{ __('app/layouts.posts') }}</a></li>
            <!--<li><a class="{{ request()->routeIs('contact.index') ? 'text-yellow-500' : '' }} text-lg uppercase transition hover:text-yellow-500" href="{{ route('contact.index') }}">{{ __('app/layouts.contact') }}</a></li>-->
        </ul>
    </div>
</nav>