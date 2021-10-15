
@if(!empty($mainSponsors) && $mainSponsors->count())

    <h2 class="text-2xl text-gray-900 font-bold tracking-tight sm:text-3xl">
        Main Sponsors
    </h2>

    <x-sponsors gridClass="grid grid-cols-1 gap-0.5 md:grid-cols-2 mt-4 lg:mt-8" :sponsors="$mainSponsors" />

@endif


@if(!empty($sponsors) && $sponsors->count())

    <h2 class="text-2xl text-gray-900 font-bold tracking-tight sm:text-3xl">
        Sponsors
    </h2>

    <x-sponsors gridClass="grid grid-cols-2 gap-0.5 md:grid-cols-4 mt-4 lg:mt-8" :sponsors="$sponsors" />

@endif




