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
                            <strong class="block text-lg font-normal">08:00 - 09:00</strong>
                            <span class="font-light">Opening + Keynote</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">09:00 - 09:45</strong>
                            <span class="font-light">Pitching & Challenges</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">09:45 - 12:00</strong>
                            <span class="font-light">Start Hacking | Let's go!</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">12:00 - 13:00</strong>
                            <span class="font-light">Lunchbreak | Yum, nice food!</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">13:00 - 18:30</strong>
                            <span class="font-light">Hacking</span>
                        </div>
                        <div>
                            <strong class="block text-lg font-normal">18:30 - 19:30</strong>
                            <span class="font-light">Hacking</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-start justify-center p-8 text-white border bg-neutral-900 time-block border-neutral-800">
                        <div class="mb-6 text-xl font-bold leading-tight uppercase md:mb-8">Sunday, 28.10.2023</div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">08:00 - 09:00</strong>
                            <span class="font-light">Opening + Keynote</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">09:00 - 09:45</strong>
                            <span class="font-light">Pitching & Challenges</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">09:45 - 12:00</strong>
                            <span class="font-light">Start Hacking | Let's go!</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">12:00 - 13:00</strong>
                            <span class="font-light">Lunchbreak | Yum, nice food!</span>
                        </div>
                        <div class="mb-6 md:mb-8">
                            <strong class="block text-lg font-normal">13:00 - 18:30</strong>
                            <span class="font-light">Hacking</span>
                        </div>
                        <div>
                            <strong class="block text-lg font-normal">18:30 - 19:30</strong>
                            <span class="font-light">Hacking</span>
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
                <p>Bring a <strong>laptop</strong> and lots of energy, we got you covered on the rest!</p>
            </div>
        </div>
    </main>
@endsection
