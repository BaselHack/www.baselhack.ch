@props(['gridClass','height','sponsors'])

@if(!empty($sponsors) and $sponsors->count())
    <div class="mb-12 grid gap-2 md:gap-4 {{ $gridClass }}">
        @foreach($sponsors as $sponsor)
            <div class="bg-white rounded-lg overflow-hidden flex justify-center">
                <a href="{{ $sponsor->url }}" target="_blank" class="inline-block max-h-{{$height}} text-gray-300">
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
