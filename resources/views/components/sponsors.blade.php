@if(!empty($sponsors) and $sponsors->count())
    <div class="mb-12 grid gap-2 md:gap-4 content-center {{ $gridClass }}">
        @foreach($sponsors as $sponsor)
            <div class="bg-white rounded-lg overflow-hidden col-span-1 flex justify-center">
                <a href="{{ $sponsor->url }}" target="_blank"
                   class="max-h-{{$height}} text-gray-300 hover:text-white">
                    @if($sponsor->image)
                        <img style="max-height: 100%;" src="{{ $sponsor->getImage() }}" alt="{{ $sponsor->name }}">
                    @else
                        <span class="">{{ \Illuminate\Support\Str::upper($sponsor->name) }}</span>
                    @endif
                </a>
            </div>
        @endforeach
    </div>
@endif
