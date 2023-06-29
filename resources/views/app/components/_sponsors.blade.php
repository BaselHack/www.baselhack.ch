@if(request()->route()->getName() != 'sponsors.index')
    <h2 class="mt-24 mb-12 text-center">Sponsors 2023</h2>
@endif

@if(!empty($mainSponsors) && $mainSponsors->count())
    <h3 class="mt-8 mb-4 text-base font-medium text-center text-white">
        @if($mainSponsors->count() > 1)
            Main Sponsors
        @else
            Main Sponsor
        @endif
    </h3>
    <x-sponsors height=48 gridClass="grid-cols-1 md:grid-cols-2" :sponsors="$mainSponsors"/>
@endif

@if(!empty($goldSponsors) && $goldSponsors->count())
    <h3 class="mt-8 mb-4 text-base font-medium text-center text-white">
        @if($goldSponsors->count() > 1)
            Gold Sponsors
        @else
            Gold Sponsor
        @endif
    </h3>
    <x-sponsors height=36 gridClass="grid-cols-2 md:grid-cols-3" :sponsors="$goldSponsors"/>
@endif

@if(!empty($silverSponsors) && $silverSponsors->count())
    <h3 class="mt-8 mb-4 text-base font-medium text-center text-white">
        @if($silverSponsors->count() > 1)
            Silver Sponsors
        @else
            Silver Sponsor
        @endif
    </h3>
    <x-sponsors height=24 gridClass="grid-cols-3 md:grid-cols-5" :sponsors="$silverSponsors"/>
@endif

@if(!empty($locationSponsors) && $locationSponsors->count())
    <h3 class="mt-8 mb-4 text-base font-medium text-center text-white">
        @if($locationSponsors->count() > 1)
            Location Sponsors
        @else
            Location Sponsor
        @endif
    </h3>
    <x-sponsors height=52 gridClass="grid-cols-1 md:grid-cols-2" :sponsors="$locationSponsors"/>
@endif

@if(request()->route()->getName() != 'sponsors.index' && !empty($partnerships) && $partnerships->count())
    <h3 class="pt-24 mt-8 mb-4 text-base font-medium text-center text-white">
        @if($partnerships->count() > 1)
            Partners
        @else
            Partner
        @endif
    </h3>
    <x-sponsors height=52 gridClass="partnerships grid-cols-4 md:grid-cols-6" :sponsors="$partnerships"/>
@endif