@props(['title','teaser'])

<div>
    <div class="max-w-screen-xl px-4 pt-8 mx-auto sm:pt-12 sm:px-6 lg:px-8 lg:justify-between">
        <div>
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">
                {{ $title }}
            </h1>
            @if(!empty($teaser))
                <div class="mt-6 space-y-6 text-gray-300">
                    <p class="text-xl">
                        {{ $teaser }}
                    </p>
                </div>
            @endif
            <div class="mt-12">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
