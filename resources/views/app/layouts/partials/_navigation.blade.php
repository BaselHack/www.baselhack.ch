<div class="pt-12 relative bg-white">

    <div class="relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
                <div>
                    <a href="{{ route('start.index') }}" class="flex">
                        <img class="h-12 w-auto sm:h-12" src="{{ asset('images/app/logos/baselhack_black.svg') }}"
                             alt="{{ config('app.name') }}">
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">

                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>


                    </button>
                </div>
                <div class="hidden md:flex-1 md:flex md:items-center md:justify-between md:space-x-12">
                    <nav class="flex space-x-10">

                        <a href="{{ route('start.index')}}"
                           class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                            {{ __('app/layouts.start') }}
                        </a>

                        <a href="{{ route('posts.index')}}"
                           class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                            {{ __('app/layouts.posts') }}
                        </a>

                        <a href="{{ route('team.index')}}"
                           class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                            {{ __('app/layouts.team') }}
                        </a>

                        <a href="{{ route('sponsors.index')}}"
                           class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                            {{ __('app/layouts.sponsors') }}
                        </a>

                        <a href="{{ route('partners.index')}}"
                           class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                            {{ __('app/layouts.partners') }}
                        </a>

                        <a href="{{ route('positions.index')}}"
                           class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                            {{ __('app/layouts.positions') }}
                        </a>

                        <a href="{{ route('contact.index')}}"
                           class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                            {{ __('app/layouts.contact') }}
                        </a>


                    </nav>

                </div>

              <!--
     Mobile menu, show/hide based on menu open state.

     Entering: "duration-150 ease-out"
       From: "opacity-0 scale-95"
       To: "opacity-100 scale-100"
     Leaving: "duration-100 ease-in"
       From: "opacity-100 scale-100"
       To: "opacity-0 scale-95"
   -->


            </div>

        </div>
    </div>
</div>

<div class="mb-12 md:hidden">
  <div class="rounded-lg shadow-md">
    <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">

      <div class="px-2 pt-2 pb-3">
        <a href="{{ route('start.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 bg-gray-50 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">
          {{ __('app/layouts.start') }}
        </a>


          <a href="{{ route('posts.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 bg-gray-50 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">
              {{ __('app/layouts.posts') }}
          </a>

        <a href="{{ route('team.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 bg-gray-50 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">
          {{ __('app/layouts.team') }}
        </a>


        <a href="{{ route('sponsors.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 bg-gray-50 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">
          {{ __('app/layouts.sponsors') }}
        </a>


        <a href="{{ route('partners.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 bg-gray-50 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">
          {{ __('app/layouts.partners') }}
        </a>

          <a href="{{ route('positions.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 bg-gray-50 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">
              {{ __('app/layouts.positions') }}
          </a>

        <a href="{{ route('contact.index') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 bg-gray-50 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">
          {{ __('app/layouts.contact') }}
        </a>
      </div>

    </div>
  </div>
</div>
