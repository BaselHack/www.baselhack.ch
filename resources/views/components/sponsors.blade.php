<div>
    @if(!empty($sponsors) and $sponsors->count())
        <div class="mb-12">
            <div class="{{ $gridClass }}">

                @foreach($sponsors as $sponsor)
                    <div class="col-span-1 flex justify-center bg-white rounded">
                        <a href="{{ $sponsor->url }}" target="_blank"
                           class="max-h-{{$height}} text-gray-300 hover:text-white transition duration-150 ease-in-out">
                            @if($sponsor->image)
                                <img style="max-height: 100%;" src="{{ $sponsor->getImage() }}" alt="{{ $sponsor->name }}">
                            @else
                                <span class="">{{ \Illuminate\Support\Str::upper($sponsor->name) }}</span>
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
