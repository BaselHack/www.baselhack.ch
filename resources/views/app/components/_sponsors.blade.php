@if(!empty($mainSponsors) && $mainSponsors->count())
    <h3 class="text-2xl text-white font-bold tracking-tight sm:text-3xl">
        Main Sponsors
    </h3>

    <x-sponsors height=48 gridClass="grid grid-cols-2 gap-0.5 md:grid-cols-2 mt-4 lg:mt-8" :sponsors="$mainSponsors" />
@endif

@if(!empty($goldSponsors) && $goldSponsors->count())
    <h3 class="text-2xl text-white font-bold tracking-tight sm:text-3xl">
        Gold Sponsors
    </h3>

    <x-sponsors height=36 gridClass="grid grid-cols-2 gap-0.5 md:grid-cols-3 mt-4 lg:mt-8" :sponsors="$goldSponsors" />
@endif

@if(!empty($silverSponsors) && $silverSponsors->count())
    <h3 class="text-2xl text-white font-bold tracking-tight sm:text-3xl">
        Silver Sponsors
    </h3>

    <x-sponsors height=24 gridClass="grid grid-cols-2 gap-0.5 md:grid-cols-4 mt-4 lg:mt-8" :sponsors="$silverSponsors" />
@endif

@if(!empty($locationSponsors) && $locationSponsors->count())
    <h3 class="text-2xl text-white font-bold tracking-tight sm:text-3xl">
        Location Sponsor
    </h3>

    <x-sponsors height=52 gridClass="grid grid-cols-2 gap-0.5 md:grid-cols-1 mt-4 lg:mt-8" :sponsors="$locationSponsors" />
@endif
