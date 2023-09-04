<nav class="mb-12" x-data="{ navOpen: false }">
    <div id="mainNavigation" :class="navOpen ? 'h-auto' : 'h-[0.25rem]'" class="mb-4 overflow-hidden transition-all duration-500 bg-black">
        <div x-cloak class="container" :class="navOpen ? 'block' : 'hidden'">
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                <a class="block py-6 bg-[#020202]" href="#">Link</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <a class="logo shrink-0" href="{{ route('start.index')}}">
                <img class="h-16" src="https://www.baselhack.ch/images/app/logos/baselhack_white.png" alt="BaselHack" />
            </a>
            <div class="flex gap-12">
                <button class="px-4 py-1 text-sm text-white bg-black border border-white rounded-full hover:text-black hover:border-yellow-500 hover:bg-yellow-500">Get Ticket</button>
                <svg x-on:click="navOpen = !navOpen" class="w-7" viewBox="0 0 59 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M56 3H6" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                    <path d="M56 17L3 17" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                    <path d="M56 32L25 32" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
    </div>
</nav>





<div x-data="{ navOpen: false }" style="transform: none; transform-origin: 50% 50% 0px;" class="relative z-50 pt-2 overflow-hidden transition-all bg-neutral-950">
    <button x-on:click="navOpen = !navOpen">Click</button>
    <div x-cloak class="bg-neutral-800" :class="navOpen ? 'h-auto' : 'h-[0.1rem]'" style="transform: none; transform-origin: 50% 50% 0px;">
        <div class="pb-16 bg-neutral-950 pt-14">
            <div class="px-6 mx-auto max-w-7xl lg:px-8">
                <div class="max-w-2xl mx-auto lg:max-w-none">
                    <div class="flex items-center justify-between">
                        <a aria-label="Home" href="https://www.baselhack.ch">
                            <img class="h-16" src="https://www.baselhack.ch/images/app/logos/baselhack_white.png" alt="BaselHack" />
                        </a>
                        <div class="flex items-center gap-x-8">
                            <a class="inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition bg-white text-neutral-950 hover:bg-neutral-200" href="/contact">
                                <span class="relative top-px">Buy Ticket</span>
                            </a>
                            <button x-on:click="navOpen = !navOpen" type="button" aria-expanded="true" class="group -m-2.5 rounded-full p-2.5 transition hover:bg-white/10" aria-label="Toggle navigation">
                                <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 fill-white group-hover:fill-neutral-200">
                                    <path d="m5.636 4.223 14.142 14.142-1.414 1.414L4.222 5.637z"></path>
                                    <path d="M4.222 18.363 18.364 4.22l1.414 1.414L5.636 19.777z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="mt-px text-5xl font-medium tracking-tight text-white font-display">
            <div class="even:mt-px sm:bg-neutral-950">
                <div class="px-6 mx-auto max-w-7xl lg:px-8">
                    <div class="max-w-2xl mx-auto lg:max-w-none">
                        <div class="grid grid-cols-1 sm:grid-cols-2">
                            <a class="relative px-6 py-10 -mx-6 group isolate bg-neutral-950 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16" href="/work">
                                About <span class="absolute inset-y-0 w-screen transition opacity-0 -z-10 bg-neutral-900 group-odd:right-0 group-even:left-0 group-hover:opacity-100"></span>
                            </a>
                            <a class="relative px-6 py-10 -mx-6 group isolate bg-neutral-950 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16" href="/about">
                                Team <span class="absolute inset-y-0 w-screen transition opacity-0 -z-10 bg-neutral-900 group-odd:right-0 group-even:left-0 group-hover:opacity-100"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="even:mt-px sm:bg-neutral-950">
                <div class="px-6 mx-auto max-w-7xl lg:px-8">
                    <div class="max-w-2xl mx-auto lg:max-w-none">
                        <div class="grid grid-cols-1 sm:grid-cols-2">
                            <a class="relative px-6 py-10 -mx-6 group isolate bg-neutral-950 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16" href="/process">
                                Sponsors <span class="absolute inset-y-0 w-screen transition opacity-0 -z-10 bg-neutral-900 group-odd:right-0 group-even:left-0 group-hover:opacity-100"></span>
                            </a>
                            <a class="relative px-6 py-10 -mx-6 group isolate bg-neutral-950 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16" href="/blog">
                                Blog <span class="absolute inset-y-0 w-screen transition opacity-0 -z-10 bg-neutral-900 group-odd:right-0 group-even:left-0 group-hover:opacity-100"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="relative bg-neutral-950 before:absolute before:inset-x-0 before:top-0 before:h-px before:bg-neutral-800">
            <div class="px-6 mx-auto max-w-7xl lg:px-8">
                <div class="max-w-2xl mx-auto lg:max-w-none">
                    <div class="grid grid-cols-1 pt-10 pb-16 gap-y-10 sm:grid-cols-2 sm:pt-16">
                        <div>
                            <h2 class="text-base font-semibold text-white font-display">Contact</h2>
                            <ul role="list" class="grid grid-cols-1 gap-8 mt-6 sm:grid-cols-2">
                                <li>
                                    <address class="text-sm not-italic text-neutral-300">
                                        <strong class="text-white">Verein BaselHack</strong><br>
                                        Postfach<br>
                                        4000 Basel
                                    </address>
                                </li>
                            </ul>
                        </div>
                        <div class="sm:border-l sm:border-transparent sm:pl-16">
                            <h2 class="text-base font-semibold text-white font-display">Follow us</h2>
                            <ul role="list" class="flex mt-6 text-white gap-x-10">
                                <li>
                                    <svg class="w-6 h-6 bi bi-linkedin" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                    </svg>
                                </li>
                                <li>
                                    <svg class="w-6 h-6 bi bi-instagram" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>