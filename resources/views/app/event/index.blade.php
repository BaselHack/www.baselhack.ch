@extends('app.layouts.default')

@section('content')
    <main>
        <div class="container mt-8 mb-16">
            <div class="my-12 md:my-24">
                <h1 class="mb-4 text-2xl leading-tight md:mb-2 md:text-6xl">The 2023 BaselHack Event</h1>
                <h2 class="text-lg font-normal md:text-xl text-neutral-300">
                    48 hours of intense innovation? Let's collaborate, create, and turn ideas into reality.
                    The hackathon is more than a competition – it's a celebration of innovation, problem-solving, and teamwork.
                </h2>
            </div>
           {{-- <div class="">--}}
{{--                <h1 class="mb-5 text-4xl">Program</h1>--}}
{{--                <div class="grid gap-2 md:divide-x divide-solid md:grid-cols-2">--}}
{{--                    <div class="">--}}
{{--                        <h2 class="mb-3 text-2xl">Saturday</h2>--}}
{{--                        <p>09:00 Door opening on Saturday</p>--}}
{{--                        <p>09:30 Offical program start</p>--}}
{{--                        <p>10:00 Challenge pitching (pick a challenge or present your own)</p>--}}
{{--                        <p>10:30 Team building</p>--}}
{{--                        <p>10:45 Start work & coding in teams</p>--}}
{{--                        <p class="text-yellow">...hack, hack, hack...</p>--}}
{{--                    </div>--}}

{{--                    <div>--}}
{{--                        <h2 class="mb-3 text-2xl">Sunday</h2>--}}
{{--                        <p class="text-yellow">...hack, hack, hack..</pc>--}}
{{--                        <p>16:00 Hands-off for all teams</p>--}}
{{--                        <p>16:10 Final presentations</p>--}}
{{--                        <p>18:00 Awards and closing</p>--}}
{{--                        <p>Event ends on Sunday ca. 18:30</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> --}}
            <div class="my-12 md:my-24">
                {{-- <div class="my-8">
                    <div class="p-8 text-white border bg-neutral-900 border-neutral-700">
                        <div class="w-full mb-2 text-xl font-bold leading-tight uppercase">Friday, 27.10.2023</div>
                        <strong>BaselBoot 2023</strong>
                        <span>Build and Deploy an AI WebApp powered by ChatGPT</span>
                    </div>
                </div> --}}
                <div class="grid items-start grid-cols-1 gap-12 lg:grid-cols-2">
                    {{-- <div class="flex flex-col items-start justify-center w-48 p-8 text-white border bg-neutral-900 time-block border-neutral-800">
                        <div class="text-xl font-bold uppercase">Friday</div>
                        <hr class="my-2 border-neutral-500">
                        <div class="mb-8">
                            <span class="font-light">09:00 - 18:00</span>
                            <strong class="block">Pre Event | Workshop by Let's Boot</strong>
                        </div>
                    </div> --}}
                    <div class="flex flex-col items-start justify-center text-white border bg-neutral-900 time-block border-neutral-700">
                        <div class="w-full p-8 text-xl font-bold leading-tight uppercase border-b border-neutral-700">Saturday, 28.10.2023</div>
                        <div class="p-8">
                            <div class="mb-6 md:mb-8">
                                <div class="text-lg font-normal">
                                    <strong>09:00 - 09:30</strong>
                                    <span class="font-light">Door Opening, Registration</span>
                                </div>
                            </div>
                            <div class="mb-6 md:mb-8">
                                <div class="text-lg font-normal">
                                    <strong>09:30 - 10:00</strong>
                                    <span class="font-light">Official Event Start</span>
                                </div>
                            </div>
                            <div>
                                <div class="text-lg font-normal">
                                    <strong>10:00 - 11:00</strong>
                                    <span class="font-light">Challenge Pitching | Pick a challenge or present your own</span>
                                </div>
                            </div>
                            <hr class="w-full my-4 border border-dashed md:my-8 border-neutral-600">
                            <div class="mb-6 md:mb-8">
                                <div class="text-lg font-normal">
                                    <strong>11:00 - 12:00</strong>
                                    <span class="font-light">Hack | Start</span>
                                </div>
                            </div>
                            <div class="w-full py-2 mb-6 border-t border-b border-teal-800 md:mb-8">
                                <div class="text-lg font-normal text-teal-600">
                                    <strong>12:00 - 13:00</strong>
                                    <span class="font-light">Lunchbreak</span>
                                </div>
                            </div>
                            <div class="mb-6 md:mb-8">
                                <div class="text-lg font-normal">
                                    <strong>13:00 - 18:00</strong>
                                    <span class="font-light">Hack</span>
                                </div>
                            </div>
                            {{-- 
                            <div class="flex flex-col gap-1.5 my-2">
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                            </div>
                            <div class="w-full py-1 border-t border-b text-neutral-400 border-neutral-600">
                                <div class="text-sm font-normal">
                                    <strong>16:30 - 17:00</strong>
                                    <span class="font-light">Voluntary Talk | FPV Drones</span>
                                </div>
                            </div> 
                            
                            <div class="flex flex-col gap-1.5 my-2">
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                            </div>
                            --}}
                            <div class="w-full py-2 mb-6 border-t border-b border-teal-800 md:mb-8">
                                <div class="text-lg font-normal text-teal-600">
                                    <strong>18:00 - 19:00</strong>
                                    <span class="font-light">Dinner</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <span class="inline-block w-[4px] h-[4px] bg-white"></span>
                                <span class="inline-block w-[4px] h-[4px] bg-neutral-400"></span>
                                <span class="inline-block w-[4px] h-[4px] bg-neutral-700"></span>
                            </div>
                            <small class="block mt-4 text-neutral-400">Optional: get some sleep or hack all night :D</small>
                        </div>
                    </div>

                    <div class="flex flex-col items-start justify-center text-white border bg-neutral-900 time-block border-neutral-700">
                        <div class="w-full p-8 text-xl font-bold leading-tight uppercase border-b border-neutral-700">Sunday, 29.10.2023</div>
                        <div class="p-8">
                            <div class="flex flex-col gap-1.5 mb-4">
                                <span class="inline-block w-[4px] h-[4px] bg-neutral-700"></span>
                                <span class="inline-block w-[4px] h-[4px] bg-neutral-400"></span>
                                <span class="inline-block w-[4px] h-[4px] bg-white"></span>
                            </div>
                            {{-- <div class="mb-6 md:mb-8">
                                <div class="text-lg font-normal">
                                    <strong>08:00 - 09:00</strong>
                                    <span class="font-light">Start Day 2</span>
                                </div>
                            </div> --}}
                            {{-- <div class="flex flex-col gap-1.5 my-2">
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                            </div>
                            <div class="w-full py-1 border-t border-b text-neutral-400 border-neutral-600">
                                <div class="text-sm font-normal">
                                    <strong>9:00 - 9:30</strong>
                                    <span class="font-light">Breakfast / Gipfeli</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5 my-2">
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                            </div> --}}
                            <div class="w-full py-2 mb-6 border-t border-b border-teal-800 md:mb-8">
                                <div class="text-lg font-normal text-teal-600">
                                    <strong>09:00 - 10:00</strong>
                                    <span class="font-light">Breakfast</span>
                                </div>
                            </div>
                            <div class="mb-6 md:mb-8">
                                <div class="text-lg font-normal">
                                    <strong>10:00 - 12:00</strong>
                                    <span class="font-light">Hack | push it, push it!</span>
                                </div>
                            </div>
                            <div class="w-full py-2 mb-6 border-t border-b border-teal-800 md:mb-8">
                                <div class="text-lg font-normal text-teal-600">
                                    <strong>12:00 - 13:00</strong>
                                    <span class="font-light">Lunchbreak</span>
                                </div>
                            </div>

                            <div>
                                <div class="text-lg font-normal">
                                    <strong>13:00 - 16:00</strong>
                                    <span class="font-light">Hack | To the limit we go!</span>
                                </div>
                            </div>
                            {{-- <div class="flex flex-col gap-1.5 my-3">
                                <span class="inline-block w-[4px] h-[4px] bg-white"></span>
                                <span class="inline-block w-[4px] h-[4px] bg-white"></span>
                                <span class="inline-block w-[4px] h-[4px] bg-white"></span>
                            </div>
                            <div class="w-full py-1 border-t border-b text-neutral-400 border-neutral-600">
                                <div class="text-sm font-normal">
                                    <strong>14:00 - 14:30</strong>
                                    <span class="font-light">Voluntary Talk | AI, the next big thing?</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5 my-2">
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                                <span class="inline-block w-[3px] h-[3px] bg-white"></span>
                            </div> --}}
                            <hr class="w-full my-4 border border-dashed md:my-8 border-neutral-600">
                            <div class="pt-2 mb-6 md:mb-8">
                                <div class="text-lg font-normal">
                                    <strong>16:00</strong>
                                    <span class="font-light">Finish work for all teams</span>
                                </div>
                            </div>
                            <div class="mb-6 md:mb-8">
                                <div class="text-lg font-normal">
                                    <strong>16:15 - 17:15</strong>
                                    <span class="font-light">Final Presentations to Jury and Crowd</span>
                                </div>
                            </div>
                            <div>
                                <div class="text-lg font-normal">
                                    <strong>17:15 - 18:00</strong>
                                    <span class="font-light">Awards and Closing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="container my-32">
                <div x-cloak x-data="{ selectedId: null, init() { this.$nextTick(() => this.select(this.$id('tab', 1))) }, select(id) { this.selectedId = id }, isSelected(id) { return this.selectedId === id }, whichChild(el, parent) { return Array.from(parent.children).indexOf(el) + 1 }}" x-id="['tab']">
                    <ul x-ref="tablist" @keydown.right.prevent.stop="$focus.wrap().next()" @keydown.home.prevent.stop="$focus.first()" @keydown.page-up.prevent.stop="$focus.first()" @keydown.left.prevent.stop="$focus.wrap().prev()" @keydown.end.prevent.stop="$focus.last()" @keydown.page-down.prevent.stop="$focus.last()" role="tablist" class="flex items-stretch -mb-px">
                        <li>
                            <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'border-gray-200' : 'border-transparent'" class="inline-flex px-12 py-3 text-2xl border-t border-l border-r" role="tab">Freitag</button>
                        </li>
                        <li>
                            <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'border-gray-200' : 'border-transparent'" class="inline-flex px-12 py-3 text-2xl border-t border-l border-r" role="tab">Samstag</button>
                        </li>
                        <li>
                            <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))" @click="select($el.id)" @mousedown.prevent @focus="select($el.id)" type="button" :tabindex="isSelected($el.id) ? 0 : -1" :aria-selected="isSelected($el.id)" :class="isSelected($el.id) ? 'border-gray-200' : 'border-transparent'" class="inline-flex px-12 py-3 text-2xl border-t border-l border-r" role="tab">Sonntag</button>
                        </li>
                    </ul>
                    <div role="tabpanels" class="border border-gray-200">
                        <section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel" class="p-8">
                            <h2 class="text-xl font-bold">Timetable Freitag</h2>
                            <p class="mt-2">
                                Get-In / Meeting Point<br>
                                09:00 - 10:00 | Aeschenplatz Basel<br><br>
                                Workshop Kubernetes<br>
                                10:00 - 12:00 | Part 1<br><br>
                                Workshop Kubernetes<br>
                                14:00 - 18:00 | Part 2
                            </p>
                        </section>
                        <section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel" class="p-8">
                            <h2 class="text-xl font-bold">Samstag Timetable</h2>
                            <p class="mt-2">Fugiat odit alias, eaque optio quas nobis minima reiciendis voluptate dolorem nisi facere debitis ea laboriosam vitae omnis ut voluptatum eos. Fugiat?</p>
                        </section>
                        <section x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))" :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel" class="p-8">
                            <h2 class="text-xl font-bold">Sonntag Timetable</h2>
                            <p class="mt-2">Fugiat odit alias, eaque optio quas nobis minima reiciendis voluptate dolorem nisi facere debitis ea laboriosam vitae omnis ut voluptatum eos. Fugiat?</p>
                        </section>
                    </div>
                </div>
            </div> --}}

            <div class="my-12 md:my-32">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <img style="clip-path: polygon(0 1%, 98% 1%, 100% 100%, 2% 95%);" class="transition-transform duration-300 rounded hover:scale-105" src="/images/app/baselhack_2022_3.jpg" alt="Haus der Wirtschaft">
                    <img style="clip-path: polygon(5% 3%, 98% 1%, 100% 94%, 2% 97%);" class="transition-transform duration-300 rounded hover:scale-105" src="/images/app/baselhack_2022_2.jpg" alt="Haus der Wirtschaft">
                    <img style="clip-path: polygon(3% 3%, 100% 0, 94% 99%, 6% 94%);" class="transition-transform duration-300 rounded hover:scale-105" src="/images/app/baselhack_2022_1.jpg" alt="Haus der Wirtschaft">
                    {{-- <img style="clip-path: polygon(3% 0, 98% 3%, 100% 100%, 0 98%);" class="transition-transform duration-300 rounded hover:scale-105" src="/images/app/hdw_1.jpeg" alt="Haus der Wirtschaft">
                    <img style="clip-path: polygon(1% 1%, 100% 0, 98% 99%, 5% 100%);" class="transition-transform duration-300 rounded hover:scale-105" src="/images/app/hdw_6.jpg" alt="Haus der Wirtschaft">
                    <img style="clip-path: polygon(4% 0, 97% 2%, 96% 93%, 0 98%);" class="transition-transform duration-300 rounded hover:scale-105" src="/images/app/hdw_7.jpg" alt="Haus der Wirtschaft"> --}}
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 my-8 md:my-16 md:grid-cols-12 md:gap-12">
                <div class="col-span-12 md:col-span-7">
                    <h1 class="mb-5 text-2xl leading-tight md:text-4xl">Directions & Location</h1>
                    <p class="mb-4">
                        The location is a 8-minute train ride from Basel SBB train station.
                        An additional 5-minute walk from Pratteln train station, you will find the
                        Haus der Wirtschaft at Hardstrasse 1 (a large brown building).
                        Take the northern exit and follow Wasenstrasse to the roundabout. 
                        From there you will be able to see the entrance to the building.
                        There are limited parking spaces at the venue.
                    </p>
                    <div class="flex flex-wrap gap-4 my-8 mb-2 md:gap-8">
                        <a class="flex items-center gap-3 px-4 py-3 border rounded bg-neutral-900 border-neutral-800 text-yellow" target="_blank" href="https://maps.app.goo.gl/CQP7byXkNLGCi9p28" rel="noopener noreferrer">
                            <svg class="w-4 h-4 bi bi-pin-map" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                                <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                            </svg>
                            <span>Google Maps / Route</span>
                        </a>
                        <a class="flex items-center gap-3 px-4 py-3 border rounded bg-neutral-900 border-neutral-800 text-yellow" target="_blank" href="https://www.hdw.ch/work-meetingspaces/tagungs-und-eventcenter" rel="noopener noreferrer">
                            <svg class="w-4 h-4 bi bi-buildings" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z"/>
                                <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z"/>
                            </svg>
                            <span>Location Website</span>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-5">
                    <img class="block w-full rounded" src="/images/app/hdw.jpg" alt="Haus der Wirtschaft">
                </div>
            </div>
            
            <div class="my-12 md:my-24">
                <h1 class="mb-5 text-2xl md:text-4xl">What to bring</h1>
                <p>
                    Let's make sure you're armed and ready to conquer this adventure.<br>
                    Here's your not-so-serious "what to bring" checklist to keep the vibes high and the fun flowing:
                </p>
                <ul role="list" class="grid grid-cols-1 gap-8 mt-8 md:mt-12 md:grid-cols-2">
                    <li class="flex py-3 gap-x-6">
                        <div class="flex flex-col gap-x-3">
                            <p class="leading-6 uppercase"><strong>1. Laptop & Charger</strong></p>
                            <p class="text-[1rem] text-neutral-300">Because you can't code with your mind (yet), you'll need this trusty sidekick. It's like your Excalibur in the digital realm.</p>
                        </div>
                    </li>
                    <li class="flex py-3 gap-x-6">
                        <div class="flex flex-col gap-x-3">
                            <p class="leading-6 uppercase"><strong>2. Team Spirit</strong></p>
                            <p class="text-[1rem] text-neutral-300">Don't forget to pack your A-game and team spirit. Enthusiasm is our secret weapon!</p>
                        </div>
                    </li>
                    <li class="flex py-3 gap-x-6">
                        <div class="flex flex-col gap-x-3">
                            <p class="leading-6 uppercase"><strong>3. Rubber Ducks</strong></p>
                            <p class="text-[1rem] text-neutral-300">Every coder's confidant. Use them to explain your code (they're great listeners) or as emergency stress balls.</p>
                        </div>
                    </li>
                    <li class="flex py-3 gap-x-6">
                        <div class="flex flex-col gap-x-3">
                            <p class="leading-6 uppercase"><strong>4. Glow Sticks</strong></p>
                            <p class="text-[1rem] text-neutral-300">Illuminate your genius ideas (literally) during those late-night brainstorming sessions.</p>
                        </div>
                    </li>
                    <li class="flex py-3 gap-x-6">
                        <div class="flex flex-col gap-x-3">
                            <p class="leading-6 uppercase"><strong>5. Emoji Stickers</strong></p>
                            <p class="text-[1rem] text-neutral-300">Decorate your laptop with emoji stickers to express your code's emotional journey.</p>
                        </div>
                    </li>
                    <li class="flex py-3 gap-x-6">
                        <div class="flex flex-col gap-x-3">
                            <p class="leading-6 uppercase"><strong>6. Rubik's Cube</strong></p>
                            <p class="text-[1rem] text-neutral-300">For those moments when your code isn't the only puzzle you want to solve.</p>
                        </div>
                    </li>
                    <li class="flex py-3 gap-x-6">
                        <div class="flex flex-col gap-x-3">
                            <p class="leading-6 uppercase"><strong>7. A Sense of Humor</strong></p>
                            <p class="text-[1rem] text-neutral-300">The most important item on the list! Keep it light, laugh often, and remember that hackathons are about fun and learning.</p>
                        </div>
                    </li>
                </ul>
                <p class="mt-8 prose">We forgot something? Hit us up on our Hackathon Slack Server: <a href="https://join.slack.com/t/baselhack-2023/shared_invite/zt-2468le0gj-Q~JNIQ_HOjSX8E_QczUFYw" target="_blank">https://join.slack.com/</a></p>
                <p class="mt-8">Remember, a hackathon is about more than just lines of code; it's about camaraderie, creativity, and having a blast. So, pack your essentials, gather your team, and let's code our way into the future while having a ton of fun along the way!</p>
            </div>
        </div>
    </main>
@endsection
