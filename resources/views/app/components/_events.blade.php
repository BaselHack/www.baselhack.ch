@if(!empty($events) && $events->count())
    <h2 class="mb-4 tracking-tight">Upcoming Events</h2>

    @foreach($events as $event)
        <div class="mb-4 md:flex">

            @if($event->getImage())
                <div class="md:flex-shrink-0">
                    <img class="rounded-lg md:w-56" src="{{ $event->getImage() }}" alt="{{ $event->title }}">
                </div>
            @endif

            <div class="mt-4 md:mt-0 md:ml-6">
                @if($event->date_time || $event->location)
                    <div class="tracking-wide uppercase ">
                        @if($event->date_time)
                            <span class="mr-2 text-sm font-bold text-blue-600">{{ $event->date_time }}</span>
                        @endif
                        @if($event->location)

                            @if($event->url_location)
                                <a target="_blank" href="{{ $event->url_location }}">
                                    <span class="text-xs font-light text-gray-300 hover:text-white">{{ $event->location }}</span>
                                </a>
                            @else
                                <span class="text-xs font-light text-gray-300">{{ $event->location }}</span>
                            @endif
                        @endif
                    </div>
                @endif

                @if($event->getUrl())
                    <a target="_blank" href="{{ $event->getUrl() }}"
                       class="block mt-1 text-lg font-semibold leading-tight text-white hover:underline">
                        {{ $event->title }}
                    </a>
                @else
                    <span class="block mt-1 text-xl font-semibold leading-tight text-white hover:underline">
                        {{ $event->title }}
                    </span>
                @endif

                <p class="mt-2 text-gray-300">{{ $event->description }}</p>

                <div class="mt-2">
                    @if($event->url_information)
                        <a target="_blank" href="{{ $event->url_information }}"
                           class="inline-block px-4 py-2 mt-4 text-sm font-bold leading-none text-white bg-black border rounded hover:bg-gray-200 lg:mt-0">More
                            information</a>
                    @endif
                    @if($event->url_registration)
                        <a target="_blank" href="{{ $event->url_registration }}"
                           class="inline-block px-4 py-2 mt-4 text-sm font-bold leading-none text-white bg-black border rounded hover:bg-gray-200 lg:mt-0">Registration</a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endif
