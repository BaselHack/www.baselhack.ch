<h2 class="text-xl text-white font-medium mb-12 mt-24 text-center">Sponsors 2022</h2>
@if(!empty($mainSponsors) && $mainSponsors->count())
    <h3 class="text-base text-white font-medium mb-4 mt-8 text-center">
        @if($mainSponsors->count() > 1)
            Main Sponsors
        @else
            Main Sponsor
        @endif
    </h3>
    <x-sponsors height=48 gridClass="grid-cols-1 md:grid-cols-2" :sponsors="$mainSponsors" />
@endif

@if(!empty($goldSponsors) && $goldSponsors->count())
    <h3 class="text-base text-white font-medium mb-4 mt-8 text-center">
        @if($goldSponsors->count() > 1)
            Gold Sponsors
        @else
            Gold Sponsor
        @endif
    </h3>
    <x-sponsors height=36 gridClass="grid-cols-2 md:grid-cols-3" :sponsors="$goldSponsors" />
@endif

@if(!empty($silverSponsors) && $silverSponsors->count())
    <h3 class="text-base text-white font-medium mb-4 mt-8 text-center">
        @if($silverSponsors->count() > 1)
            Silver Sponsors
        @else
            Silver Sponsor
        @endif
    </h3>
    <x-sponsors height=24 gridClass="grid-cols-3 md:grid-cols-5" :sponsors="$silverSponsors" />
@endif

@if(!empty($locationSponsors) && $locationSponsors->count())
    <h3 class="text-base text-white font-medium mb-4 mt-8 text-center">
        @if($locationSponsors->count() > 1)
            Location Sponsors
        @else
            Location Sponsor
        @endif
    </h3>
    <x-sponsors height=52 gridClass="grid-cols-1 md:grid-cols-2" :sponsors="$locationSponsors" />
@endif

@if(!empty($partnerships) && $partnerships->count())
    <h3 class="text-base text-white font-medium mb-4 mt-8 pt-24 text-center">
        @if($partnerships->count() > 1)
            Partners
        @else
            Partner
        @endif
    </h3>
    <x-sponsors height=52 gridClass="partnerships grid-cols-4 md:grid-cols-6" :sponsors="$partnerships" />
@endif
