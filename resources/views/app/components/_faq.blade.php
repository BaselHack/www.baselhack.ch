<div class="my-24">
    <div x-data="{ active: 1 }" class="mx-auto max-w-6xl w-full min-h-[16rem] space-y-4">
        <div x-data="{ id: 1, get expanded() { return this.active === this.id }, set expanded(value) { this.active = value ? this.id : null } }" role="region" class="rounded-lg shadow">
            <h2>
                <button x-on:click="expanded = !expanded" :aria-expanded="expanded" class="flex items-center justify-between w-full px-6 py-2 text-xl font-bold">
                    <span>Was ist ein Hackathon?</span>
                    <span x-cloak x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                    <span x-cloak x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                </button>
            </h2>
            <div x-show="expanded" x-collapse>
                <div class="px-6 pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. In magnam quod natus deleniti architecto eaque consequuntur ex, illo neque iste repellendus modi, quasi ipsa commodi saepe? Provident ipsa nulla earum.</div>
            </div>
        </div>
        <div x-data="{ id: 2, get expanded() { return this.active === this.id }, set expanded(value) { this.active = value ? this.id : null } }" role="region" class="rounded-lg shadow">
            <h2>
                <button x-on:click="expanded = !expanded" :aria-expanded="expanded" class="flex items-center justify-between w-full px-6 py-2 text-xl font-bold">
                    <span>Wo findet der BaselHack statt?</span>
                    <span x-cloak x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                    <span x-cloak x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                </button>
            </h2>
            <div x-show="expanded" x-collapse x-cloak>
                <div class="px-6 pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. In magnam quod natus deleniti architecto eaque consequuntur ex, illo neque iste repellendus modi, quasi ipsa commodi saepe? Provident ipsa nulla earum.</div>
            </div>
        </div>
    </div>
</div>