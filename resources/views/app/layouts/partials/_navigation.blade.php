<nav x-cloak class="container px-8 mx-auto my-12">
    <div class="flex flex-wrap items-center justify-between w-full gap-4">
        <a class="shrink-0" href="index.html">
            <img class="h-16" src="https://www.baselhack.ch/images/app/logos/baselhack_white.png" alt="BaselHack" />
        </a>
        <button @click="navOpen = !navOpen" class="transition md:hidden hover:text-teal-300" role="button" aria-label="Navigation öffnen">
            <svg x-show="!navOpen" class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg x-show="navOpen" class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <ul class="flex-row hidden gap-4 my-8 desktop-navigation md:flex">
            <li><a class="uppercase transition hover:text-teal-400" href="about.html">About</a></li>
            <li><a class="uppercase transition hover:text-teal-400" href="team.html">Team</a></li>
            <li><a class="uppercase transition hover:text-teal-400" href="sponsors.html">Sponsors</a></li>
            <li><a class="uppercase transition hover:text-teal-400" href="partner.html">Partner</a></li>
            <li><a class="uppercase transition hover:text-teal-400" href="blog.html">Blog</a></li>
            <li><a class="uppercase transition hover:text-teal-400" href="contact.html">Contact</a></li>
        </ul>
    </div>
    <div @click.outside="navOpen = false" x-show="navOpen" class="my-12 rounded mobile-navigation md:hidden" x-transition>
        <ul class="grid grid-cols-1 divide-y divide-slate-300">
            <li><a class="text-lg uppercase transition hover:text-teal-400" href="about.html">About</a></li>
            <li><a class="text-lg uppercase transition hover:text-teal-400" href="team.html">Team</a></li>
            <li><a class="text-lg uppercase transition hover:text-teal-400" href="sponsors.html">Sponsors</a></li>
            <li><a class="text-lg uppercase transition hover:text-teal-400" href="partner.html">Partner</a></li>
            <li><a class="text-lg uppercase transition hover:text-teal-400" href="blog.html">Blog</a></li>
            <li><a class="text-lg uppercase transition hover:text-teal-400" href="contact.html">Contact</a></li>
        </ul>
    </div>
</nav>



<!--
<div class="relative header">
    <div class="relative">
        <div class="px-4 mx-auto max-w-7xl sm:px-6">
            <div class="flex items-center justify-between w-full px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
                <div>
                    <a class="shrink-0" href="{{ route('start.index') }}">
                        <img class="h-16" src="{{ asset('images/app/logos/baselhack_white.png') }}" alt="{{ config('app.name') }}" />
                    </a>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <button type="button"
                            id="hamburger"
                            class="inline-flex items-center justify-center p-2 text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-200 focus:outline-none focus:bg-gray-200 focus:text-black">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
                <div class="hidden md:flex-1 md:flex md:items-center md:justify-between md:space-x-12">
                    <nav class="flex space-x-10">
                        <a href="{{ route('about.index')}}"
                           class="text-base font-medium leading-6 text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.about') }}
                        </a>

                        <a href="{{ route('schedule.index')}}"
                           class="text-base font-medium leading-6 text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.schedule') }}
                        </a>
                        <a href="{{ route('challenges.index')}}"
                           class="text-base font-medium leading-6 text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.challenges') }}
                        </a>
                        
                        <a href="{{ route('sponsors.index')}}"
                           class="text-base font-medium leading-6 text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.sponsors') }}
                        </a>

                        <a href="{{ route('posts.index')}}"
                           class="text-base font-medium leading-6 text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.posts') }}
                        </a>

                        <a href="{{ route('team.index')}}"
                           class="text-base font-medium leading-6 text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.team') }}
                        </a>

                        <a href="{{ route('contact.index')}}"
                           class="text-base font-medium leading-6 text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.contact') }}
                        </a>
                    </nav>
                    <a href="https://eventfrog.ch/en/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html"
                       target="_blank"
                       class="px-8 py-2 text-base font-bold text-black rounded-md bg-yellow hover:bg-yellow-accent">
                        Register Ticket</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mobile-menu" class="hidden px-2 mb-12 md:hidden">
    <div class="rounded-lg shadow-md">
        <div class="overflow-hidden text-white bg-black rounded-lg shadow-xs" role="menu" aria-orientation="vertical"
             aria-labelledby="main-menu">
            <div class="px-2 pt-2 pb-3">
                <a href="{{ route('about.index') }}"
                   class="block px-3 py-2 mt-1 text-base font-medium text-black rounded-md bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.about') }}
                </a>

                <a href="{{ route('schedule.index') }}"
                   class="block px-3 py-2 mt-1 text-base font-medium text-black rounded-md bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.schedule') }}
                </a>

                <a href="{{ route('challenges.index') }}"
                   class="block px-3 py-2 mt-1 text-base font-medium text-black rounded-md bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.challenges') }}
                </a>

                <a href="{{ route('sponsors.index') }}"
                   class="block px-3 py-2 mt-1 text-base font-medium text-black rounded-md bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.sponsors') }}
                </a>

                <a href="{{ route('posts.index') }}"
                   class="block px-3 py-2 mt-1 text-base font-medium text-black rounded-md bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.posts') }}
                </a>

                <a href="{{ route('team.index') }}"
                   class="block px-3 py-2 mt-1 text-base font-medium text-black rounded-md bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.team') }}
                </a>

                <a href="{{ route('contact.index') }}"
                   class="block px-3 py-2 mt-1 text-base font-medium text-black rounded-md bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.contact') }}
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    const mobileMenuButton = document.getElementById("hamburger");
    const mobileMenu = document.getElementById("mobile-menu");
    mobileMenuButton.onclick = function() {
        mobileMenu.classList.toggle("hidden")
    }
</script>
-->