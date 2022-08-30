<div class="header relative bg-black">
    <div class="relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
                <div>
                    <a href="{{ route('start.index') }}" class="flex">
                        <img class="h-12 w-auto sm:h-12" src="{{ asset('images/app/logos/baselhack_white.png') }}"
                             alt="{{ config('app.name') }}">
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
                            id="hamburger"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-200 focus:outline-none focus:bg-gray-200 focus:text-black transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
                <div class="hidden md:flex-1 md:flex md:items-center md:justify-between md:space-x-12">
                    <nav class="flex space-x-10">
                        <a href="{{ route('about.index')}}"
                           class="text-base leading-6 font-medium text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.about') }}
                        </a>

                        <a href="{{ route('challenges.index')}}"
                           class="text-base leading-6 font-medium text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.challenges') }}
                        </a>

                        <a href="{{ route('sponsors.index')}}"
                           class="text-base leading-6 font-medium text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.sponsors') }}
                        </a>

                        <a href="{{ route('posts.index')}}"
                           class="text-base leading-6 font-medium text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.posts') }}
                        </a>

                        <a href="{{ route('team.index')}}"
                           class="text-base leading-6 font-medium text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.team') }}
                        </a>

                        <a href="{{ route('contact.index')}}"
                           class="text-base leading-6 font-medium text-gray-300 hover:text-white focus:outline-none focus:text-gray-300">
                            {{ __('app/layouts.contact') }}
                        </a>
                    </nav>
                    <a href="https://eventfrog.ch/en/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html"
                       target="_blank"
                       class="px-8 py-2 text-base font-bold rounded-md text-black bg-yellow hover:bg-yellow-accent">
                        Register Ticket</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mobile-menu" class="mb-12 px-2 md:hidden hidden">
    <div class="rounded-lg shadow-md">
        <div class="rounded-lg bg-black text-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical"
             aria-labelledby="main-menu">
            <div class="px-2 pt-2 pb-3">
                <a href="{{ route('about.index') }}"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-black bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.about') }}
                </a>

                <a href="{{ route('challenges.index') }}"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-black bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.challenges') }}
                </a>

                <a href="{{ route('sponsors.index') }}"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-black bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.sponsors') }}
                </a>

                <a href="{{ route('posts.index') }}"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-black bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.posts') }}
                </a>

                <a href="{{ route('team.index') }}"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-black bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
                   role="menuitem">
                    {{ __('app/layouts.team') }}
                </a>

                <a href="{{ route('contact.index') }}"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-black bg-gray-50 hover:text-white hover:bg-gray-200 focus:outline-none focus:text-white focus:bg-gray-50"
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
