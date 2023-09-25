@extends('app.layouts.default')

@section('content')
    <main>
        <div class="container mt-8 mb-16">
            <div class="my-12 md:my-24">
                <h1 class="mb-1 text-6xl">Sponsored Challenges</h1>
                <h2 class="text-xl font-normal text-neutral-300">Get Ready to Hack & Win: Check out our sponsored challenges!</h2>
            </div>
            
            @if(!$challenges->isEmpty())
                <section class="grid grid-cols-1 gap-10 md:grid-cols-2">
                    @foreach($challenges->shuffle() as $challenge)
                        <a href="{{ route('challenges.show', $challenge) }}" class="flex flex-col gap-2 p-8 border rounded group bg-neutral-900 border-neutral-700">
                            <div class="flex self-start gap-4 mb-2 text-white group-hover:text-yellow-500">
                                <svg class="w-6 h-6 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                                {{ $challenge->company->name }}
                            </div>
                            <div>
                                <h1 class="mb-1 text-xl font-bold group-hover:text-yellow-500">{{ $challenge->title }}</h1>
                                <small class="text-neutral-300 group-hover:text-yellow-500">{{ $challenge->subtitle }}</small>
                            </div>
                            <hr class="my-4 border-neutral-500">
                            <div class="flex items-center gap-4 group">
                                <svg class="w-5 h-5 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                                <span class="group-hover:text-yellow-500">Read Details</span>
                            </div>
                        </a>
                    @endforeach
                </section>
            @else
                <div class="p-4 text-lg text-center bg-black rounded">Currently no challenges published yet!</div>
            @endif
            
            <hr class="my-12 md:my-24 border-neutral-700">

            <div class="my-12 md:my-24">
                <div>
                    <h1 class="mb-1 text-6xl">Freestyle Challenges</h1>
                    <h2 class="text-xl font-normal text-neutral-300">Pitches and Freestyle Challenges for the Hack Sake</h2>
                </div>

                <section class="my-12 md:my-16 px-12 py-8 text-white rounded bg-[#080808] border-neutral-800 border">
                    <div class="flex flex-col gap-4">
                        <div class="mb-2">
                            <h2 class="text-2xl">Pitch your own idea!</h2>
                            <p class="text-lg">
                                Your have your own pitch idea?<br>
                                Present it within 3 minutes and get your team together!</p>
                        </div>
                        <a class="self-start px-6 py-3 text-black bg-yellow-500 rounded" href="https://github.com/BaselHack/BaselHack-2023#how-does-it-work" target="_blank">Post on Github <nobr>(not required!)</nobr></a> 
                    </div>
                </section>
            </div>

            <hr class="my-12 md:my-24 border-neutral-700">

            <div>
                <h2 class="text-5xl">What is a good hackathon challenge?</h2>
                <p class="mb-12 text-xl md:mb-20 text-neutral-400">It's characterized by certain features that encourage engagement, creativity and competition of the participants.</p>
                <div class="grid grid-cols-1 gap-16 mb-12 md:grid-cols-2 md:mb-24">
                    <article>
                        <h1 class="text-xl">Relevance</h1>
                        <hr class="my-3 border-neutral-700">
                        <p class="text-neutral-400">A challenge should be related to a specific topic and is appealing when it addresses a current problem. It is more exciting to develop an approach that can have a positive impact.</p>
                    </article>
                    <article>
                        <h1 class="text-xl">Challenge</h1>
                        <hr class="my-3 border-neutral-700">
                        <p class="text-neutral-400">The challenge itself can often be quite challenging. It can be difficult to push participants to use their full skillset. There should be ample room for innovation and advanced solutions to encourage the development of new technologies and ideas.</p>
                    </article>
                    <article>
                        <h1 class="text-xl">Goals</h1>
                        <hr class="my-3 border-neutral-700">
                        <p class="text-neutral-400">The challenge must set clear objectives to ensure participants understand expectations and can be effectively guided towards success. Clarity in goals is essential for a productive hackathon experience.</p>
                    </article>
                    <article>
                        <h1 class="text-xl">Openness</h1>
                        <hr class="my-3 border-neutral-700">
                        <p class="text-neutral-400">While there are goals and rules, a good hackathon challenge should leave enough room for creativity. It's important to encourage diverse approaches and solutions. This allows participants to harness their skills and ideas and develop solutions that embrace various perspectives and use cases.</p>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection