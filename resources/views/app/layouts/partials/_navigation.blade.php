{{--
<style>
    .navigation {
        cursor: none;
    }
    .custom-cursor {
        display: none;
    }
    .navigation a {
        cursor: none;
    }
    .navigation .custom-cursor {
        position: fixed;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #fff;
        pointer-events: none;
        transition: 0.05s;
        transform: translate(-50%, -50%);
        mix-blend-mode: difference;
    }
    .navigation:hover .custom-cursor {
        display: block;
    }
    .navigation li:hover ~ .custom-cursor {
        transform: scale(4);
    }
</style>
--}}
<div class="border-b bg-neutral-900 border-neutral-800">
    <nav x-cloak class="container py-4 md:py-2 navigation">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <a class="logo shrink-0" href="{{ route('start.index')}}">
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
            <div class="items-center justify-center hidden gap-8 md:block">
                <ul class="flex-row hidden gap-8 my-8 xl:gap-10 md:flex">
                    <li><a class="{{ request()->routeIs('event.index') ? 'text-yellow-500 underline' : '' }} uppercase transition hover:underline hover:text-yellow-500" href="{{ route('event.index') }}" href="{{ route('event.index') }}">{{ __('app/layouts.event') }}</a></li>
                    <li><a class="{{ request()->routeIs('team.index') ? 'text-yellow-500 underline' : '' }} uppercase transition hover:underline hover:text-yellow-500" href="{{ route('team.index') }}" href="{{ route('team.index') }}">{{ __('app/layouts.team') }}</a></li>
                    <li><a class="{{ request()->routeIs('challenges.index') ? 'text-yellow-500 underline' : '' }} uppercase transition hover:underline hover:text-yellow-500" href="{{ route('challenges.index') }}" href="{{ route('challenges.index') }}">{{ __('app/layouts.challenges') }}</a></li>
                    <li><a class="{{ request()->routeIs('sponsors.index') ? 'text-yellow-500 underline' : '' }} uppercase transition hover:underline hover:text-yellow-500" href="{{ route('sponsors.index') }}">SUPPORTERS</a></li>
                    <li><a class="{{ request()->routeIs('posts.index') ? 'text-yellow-500 underline' : '' }} uppercase transition hover:underline hover:text-yellow-500" href="{{ route('posts.index') }}" href="{{ route('posts.index') }}">{{ __('app/layouts.posts') }}</a></li>
                    <li><a class="{{ request()->routeIs('about.index') ? 'text-yellow-500 underline' : '' }} uppercase transition hover:underline hover:text-yellow-500" href="{{ route('about.index') }}" href="{{ route('about.index') }}">{{ __('app/layouts.about') }}</a></li>
                    {{--<li><a class="{{ request()->routeIs('contact.index') ? 'text-yellow-500 underline' : '' }} uppercase transition hover:underline hover:text-yellow-500" href="{{ route('contact.index') }}" href="{{ route('contact.index') }}">{{ __('app/layouts.contact') }}</a></li>--}}
                    <div class="custom-cursor"></div>
                </ul>
            </div>
        </div>
        <div @click.outside="navOpen = false" x-show="navOpen" class="my-12 rounded mobile-navigation md:hidden" x-transition>
            <ul class="grid grid-cols-1 gap-4 text-center">
                <li><a class="{{ request()->routeIs('event.index') ? 'text-yellow-500 underline' : '' }} text-lg uppercase transition hover:text-yellow-500 hover:underline" href="{{ route('event.index') }}">{{ __('app/layouts.event') }}</a></li>
                <li><a class="{{ request()->routeIs('team.index') ? 'text-yellow-500 underline' : '' }} text-lg uppercase transition hover:text-yellow-500 hover:underline" href="{{ route('team.index') }}">{{ __('app/layouts.team') }}</a></li>
                <li><a class="{{ request()->routeIs('challenges.index') ? 'text-yellow-500 underline' : '' }} text-lg uppercase transition hover:text-yellow-500 hover:underline" href="{{ route('challenges.index') }}">{{ __('app/layouts.challenges') }}</a></li>
                <li><a class="{{ request()->routeIs('sponsors.index') ? 'text-yellow-500 underline' : '' }} text-lg uppercase transition hover:text-yellow-500 hover:underline" href="{{ route('sponsors.index') }}">SUPPORTERS</a></li>
                <li><a class="{{ request()->routeIs('posts.index') ? 'text-yellow-500 underline' : '' }} text-lg uppercase transition hover:text-yellow-500 hover:underline" href="{{ route('posts.index')}}">{{ __('app/layouts.posts') }}</a></li>
                <li><a class="{{ request()->routeIs('about.index') ? 'text-yellow-500 underline' : '' }} text-lg uppercase transition hover:text-yellow-500 hover:underline" href="{{ route('about.index') }}">{{ __('app/layouts.about') }}</a></li>
                {{--<li><a class="{{ request()->routeIs('contact.index') ? 'text-yellow-500 underline' : '' }} text-lg uppercase transition hover:text-yellow-500 hover:underline" href="{{ route('contact.index') }}">{{ __('app/layouts.contact') }}</a></li>--}}
            </ul>
        </div>
    </nav>
</div>
{{--
<script>
    const customCursor = document.querySelector(".custom-cursor");
    document.addEventListener("mousemove", (e) => {
        customCursor.style.left = e.pageX + "px";
        customCursor.style.top = e.pageY + "px";
    });
</script>
--}}