@extends('app.layouts.default')

@section('content')
    <main>
        <div class="container mt-8 mb-16">
            <div class="my-12 md:my-24">
                <h1 class="mb-4 text-2xl leading-tight md:mb-2 md:text-6xl">The 2023 BaselHack Event</h1>
                <h2 class="text-lg font-normal md:text-xl text-neutral-300">Everything about the event</h2>
            </div>
{{--            <div class="">--}}
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
{{--            </div>--}}

            <div class="my-12 md:my-24">
                <div class="grid items-start grid-cols-1 gap-12 md:grid-cols-2">
                    {{-- <div class="flex flex-col items-start justify-center w-48 p-8 text-white border bg-neutral-900 time-block border-neutral-800">
                        <div class="text-xl font-bold uppercase">Friday</div>
                        <hr class="my-2 border-neutral-500">
                        <div class="mb-8">
                            <span class="font-light">09:00 - 18:00</span>
                            <strong class="block">Pre Event | Workshop by Let's Boot</strong>
                        </div>
                    </div> --}}
                    <div class="flex flex-col items-start justify-center p-8 text-white border bg-neutral-900 time-block border-neutral-800">
                        <div class="mb-6 text-xl font-bold leading-tight uppercase md:mb-8">Saturday, 27.10.2023</div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">09:00</strong>
                            <span class="font-light">Door Opening</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">09:30 - 10:00</strong>
                            <span class="font-light">Official program start in the Auditorium</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">10:00 - 10:30</strong>
                            <span class="font-light">Challenge Pitching | Pick a challenge or present your own</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">10.30 - 10:45</strong>
                            <span class="font-light">Start work & coding in teams</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">12:00 - 13:00</strong>
                            <span class="font-light">Lunchbreak</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">13:00 - 16:00</strong>
                            <span class="font-light">Hack | Let's goo!</span>
                        </div>
                        <div class="mb-6 text-neutral-400 md:mb-8">
                            <strong class="block text-lg font-normal">16:30 - 17:00</strong>
                            <span class="font-light">Voluntary Talk about FPV Drones</span>
                        </div>
                        <div>
                            <strong class="block text-lg font-normal">18:30</strong>
                            <span class="font-light">Dinner</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start justify-center p-8 text-white border bg-neutral-900 time-block border-neutral-800">
                        <div class="mb-6 text-xl font-bold leading-tight uppercase md:mb-8">Sunday, 28.10.2023</div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">08:00</strong>
                            <span class="font-light">Official Start of Day #2</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">12:00</strong>
                            <span class="font-light">Lunchbreak</span>
                        </div>
                        <div class="mb-6 md:mb-8 text-neutral-400">
                            <strong class="block text-lg font-normal">14:00 - 14:30</strong>
                            <span class="font-light">Voluntary Talk | AI, the next big thing?</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">16:00</strong>
                            <span class="font-light">Hands off at exactly 16:00 for all teams!</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">16:15</strong>
                            <span class="font-light">Final Presentations to Jury and Crowd</span>
                        </div>
                        <div>
                            <strong class="block text-lg font-normal">17:30 - 18:00</strong>
                            <span class="font-light">Awards and Closing</span>
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

            <div class="my-8">
                <h1 class="mb-5 text-2xl leading-tight md:text-4xl">Directions & Location</h1>
                <p class="mb-4">
                    The location is 5 minutes from Pratteln train station at Hardstrasse 1 in the 
                    Haus der Wirtschaft (large brown building right at the roundabout) in 4133 Pratteln. 
                    From Pratteln train station, take the northern exit towards IKEA and follow 
                    Wasenstrasse to the roundabout. From there you can see the entrance to the building. 
                    There are limited parking spaces available. We recommend traveling by public transport.
                </p>
                <div class="flex flex-wrap gap-4 my-8 mb-2 md:my-auto md:gap-8">
                    <a class="underline text-yellow" target="_blank" href="https://goo.gl/maps/b992RrCwVFgt5BVq8" rel="noopener noreferrer">Google Maps / Route</a>
                    <a class="underline text-yellow" href="https://www.hdw.ch/" target="_blank">Location Website</a>
                </div>
            </div>
            <div class="my-12 md:my-24">
                <h1 class="mb-5 text-2xl md:text-4xl">What to bring</h1>
                <p>
                    Let's make sure you're armed and ready to conquer this adventure.<br>
                    Here's your not-so-serious "What to bring" checklist to keep the vibes high and the fun flowing:
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
                <p class="mt-8 prose">We forgot something? Hit us up on our Hackathon Slack Server: <a href="https://join.slack.com/t/baselhack-2023/" target="_blank">https://join.slack.com/t/baselhack-2023/</a></p>
                <p class="mt-8">Remember, a hackathon is about more than just lines of code; it's about camaraderie, creativity, and having a blast. So, pack your essentials, gather your team, and let's code our way into the future while having a ton of fun along the way!</p>
            </div>
        </div>
    </main>
@endsection
