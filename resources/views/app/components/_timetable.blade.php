{{--
<div class="container my-24">
    <h2 class="mb-4 text-4xl">BaselHack Timetable</h2>
    <p class="max-w-2xl mb-12">Here you can find the timetable for the event. Please note that the timetable is subject to change.</p>
    <div class="grid items-start grid-cols-1 gap-12 md:grid-cols-3">
    <div class="flex flex-col items-start justify-center p-8 text-white transition-colors duration-500 border-l-8 border-yellow-600 time-block">
            <div class="text-xl font-bold">Friday</div>
            <hr class="my-2 w-50">
            <div class="mb-8">
                <strong class="block">Get-In / Meeting Point</strong>
                09:00 - 10:00 | Aeschenplatz Basel
            </div>
            <div class="mb-8">
                <strong class="block">Workshop Kubernetes</strong>
                10:00 - 12:00 | Part 1
            </div>
            <div>
                <strong class="block">Workshop Kubernetes</strong>
                14:00 - 18:00 | Part 2
            </div>
        </div>
        <div class="flex flex-col items-start justify-center p-8 text-white border-l-8 border-yellow-600 time-block">
            <div class="text-xl font-bold">Saturday</div>
            <hr class="my-2 w-50">
            <div class="mb-8">
                <strong class="block">Welcome / Get-In</strong>
                08:00 - 09:00 | Registration
            </div>
            <div class="mb-8">
                <strong class="block">Pitching</strong>
                09:00 - 09:45 | Challenges
            </div>
            <div>
                <strong class="block">Start Hacking</strong>
                14:00 - 18:00 | Work
            </div>
        </div>
        <div class="flex flex-col items-start justify-center p-8 text-white border-l-8 border-yellow-600 time-block">
            <div class="text-xl font-bold">Sunday</div>
            <hr class="my-2 w-50">
            <div class="mb-8">
                <strong class="block">Door Opening</strong>
                08:30 - 12:00 | Work
            </div>
            <div class="mb-8">
                <strong class="block">Lunch</strong>
                12:00 - 14:00 | Foodbreak
            </div>
            <div class="mb-8">
                <strong class="block">Presentation</strong>
                14:00 - 16:00 | Jury / Judges
            </div>
            <div>
                <strong class="block">Closing</strong>
                16:00 - 17:00 | End
            </div>
        </div>
    </div>
</div>
<div class="container my-32">
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
</div>
--}}