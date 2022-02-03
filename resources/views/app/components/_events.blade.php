@if(!empty($events) && $events->count())
    <div class="text-black font-bold text-xl tracking-tight mb-4">
        <span>Upcoming Events</span>
    </div>

    @foreach($events as $event)
        <div class="md:flex mb-4">

            @if($event->getImage())
                <div class="md:flex-shrink-0">
                    <img class="rounded-lg md:w-56" src="{{ $event->getImage() }}" alt="{{ $event->title }}">
                </div>
            @endif

            <div class="mt-4 md:mt-0 md:ml-6">
                @if($event->date_time || $event->location)
                    <div class="uppercase tracking-wide ">
                        @if($event->date_time)
                            <span class="text-sm text-blue-600 font-bold mr-2">{{ $event->date_time }}</span>
                        @endif
                        @if($event->location)

                            @if($event->url_location)
                                <a target="_blank" href="{{ $event->url_location }}">
                                    <span class="text-xs text-gray-500 hover:text-gray-700 font-light">{{ $event->location }}</span>
                                </a>
                            @else
                                <span class="text-xs text-gray-500 font-light">{{ $event->location }}</span>
                            @endif
                        @endif
                    </div>
                @endif

                @if($event->getUrl())
                    <a target="_blank" href="{{ $event->getUrl() }}"
                       class="block mt-1 text-lg leading-tight font-semibold text-white hover:underline">
                        {{ $event->title }}
                    </a>
                @else
                    <span class="block mt-1 text-xl leading-tight font-semibold text-white hover:underline">
                        {{ $event->title }}
                    </span>
                @endif

                <p class="mt-2 text-gray-600">{{ $event->description }}</p>

                <div class="mt-2">
                    @if($event->url_information)
                        <a target="_blank" href="{{ $event->url_information }}"
                           class="inline-block text-sm font-bold px-4 py-2 leading-none border rounded bg-black text-white hover:bg-gray-800 mt-4 lg:mt-0">More
                            information</a>
                    @endif
                    @if($event->url_registration)
                        <a target="_blank" href="{{ $event->url_registration }}"
                           class="inline-block text-sm font-bold px-4 py-2 leading-none border rounded bg-black text-white hover:bg-gray-800 mt-4 lg:mt-0">Registration</a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endif
