<div class="my-32">
    <div x-data="{ active: 1 }" class="mx-auto max-w-6xl w-full min-h-[16rem] space-y-4">
        <div x-data="{ id: 1, get expanded() { return this.active === this.id }, set expanded(value) { this.active = value ? this.id : null } }" role="region" class="rounded-lg shadow">
            <h2 class="py-2 rounded bg-neutral-800">
                <button x-on:click="expanded = !expanded" :aria-expanded="expanded" class="flex items-center justify-between w-full px-6 py-2 text-xl font-bold group">
                    <div class="flex items-center gap-4">
                        <svg class="w-6 transition duration-200 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                        <span class="transition duration-200 group-hover:text-yellow-500">Was ist ein Hackathon?</span>
                    </div>
                    <div x-cloak x-show="expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div x-cloak x-show="!expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                        </svg>
                    </div>
                </button>
            </h2>
            <div x-show="expanded" x-collapse>
                <div class="p-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. In magnam quod natus deleniti architecto eaque consequuntur ex, illo neque iste repellendus modi, quasi ipsa commodi saepe? Provident ipsa nulla earum.</div>
            </div>
        </div>
        <div x-data="{ id: 2, get expanded() { return this.active === this.id }, set expanded(value) { this.active = value ? this.id : null } }" role="region" class="rounded-lg shadow">
            <h2 class="py-2 rounded bg-neutral-800">
                <button x-on:click="expanded = !expanded" :aria-expanded="expanded" class="flex items-center justify-between w-full px-6 py-2 text-xl font-bold group">
                    <div class="flex items-center gap-4">
                        <svg class="w-6 transition duration-200 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                        <span class="transition duration-200 group-hover:text-yellow-500">Wo findet der BaselHack statt?</span>
                    </div>
                    <span x-cloak x-show="expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                    <span x-cloak x-show="!expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div x-show="expanded" x-collapse x-cloak>
                <div class="p-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. In magnam quod natus deleniti architecto eaque consequuntur ex, illo neque iste repellendus modi, quasi ipsa commodi saepe? Provident ipsa nulla earum.</div>
            </div>
        </div>
    </div>
</div>