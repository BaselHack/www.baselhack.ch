@props(['title','teaser'])

<div>
    <h1 class="container text-4xl font-extrabold tracking-tight sm:text-5xl">{{ $title }}</h1>
    @if(!empty($teaser))
        <div class="container mt-6 space-y-6 text-gray-300">
            <p class="text-xl">{{ $teaser }}</p>
        </div>
    @endif
    <div class="container mt-12 md:mt-24">
        {{ $slot }}
    </div>
</div>
