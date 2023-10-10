@props(['title','teaser'])

<div>
    <div class="container my-12 md:my-24">
        <h1 class="mb-4 text-2xl leading-tight md:mb-2 md:text-6xl">{{ $title }}</h1>
        @if(!empty($teaser))
            <h2 class="text-lg font-normal md:text-xl text-neutral-300">{{ $teaser }}</h2>
        @endif
    </div>

    <div class="container mt-12 md:mt-24">
        {{ $slot }}
    </div>
</div>
