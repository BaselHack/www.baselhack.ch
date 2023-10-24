@extends('app.layouts.default')

@section('content')
    <main>
        <div class="container mt-8 mb-16">
            <div class="my-12 md:my-24">
                <h1 class="mb-4 text-2xl leading-tight md:mb-2 md:text-6xl">Sponsored Challenges</h1>
                <h2 class="text-lg font-normal md:text-xl text-neutral-300">Get Ready to Hack & Win: Check out our sponsored challenges!</h2>
            </div>
            
            @if(!$challenges->isEmpty())
                <section class="grid grid-cols-1 gap-10 md:grid-cols-2">
                    @foreach($challenges->shuffle() as $challenge)
                        <a href="{{ route('challenges.show', $challenge) }}" class="flex flex-col gap-2 p-6 border rounded md:p-8 group bg-neutral-900 border-neutral-700">
                            <div class="flex self-start gap-4 mb-2 text-white group-hover:text-yellow-500">
                                <svg class="w-6 h-6 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                                {{ $challenge->company->name }}
                            </div>
                            <div class="mb-auto">
                                <h1 class="mb-3 text-lg font-bold leading-tight md:mb-2 md:text-xl group-hover:text-yellow-500">{{ $challenge->title }}</h1>
                                <small class="text-neutral-300 group-hover:text-yellow-500">{{ $challenge->subtitle }}</small>
                            </div>
                            <hr class="my-2 border-dashed md:my-4 border-neutral-700">
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
                    <h1 class="mb-4 text-2xl leading-tight md:mb-2 md:text-6xl">Freestyle Challenges</h1>
                    <h2 class="text-lg font-normal md:text-xl text-neutral-300">Pitches and Freestyle Challenges for the Hack Sake</h2>
                </div>

                <section class="my-12 md:my-16 p-6 md:p-8 text-white rounded bg-[#080808] border-neutral-800 border">
                    <div class="flex flex-col gap-4">
                        <div class="mb-2">
                            <h2 class="text-xl leading-tight md:text-2xl">Pitch your own idea!</h2>
                            <p class="font-light text-md md:text-lg">
                                You have your own pitch idea?<br>
                                Present it in 3 minutes and form your team!</p>
                        </div>
                        <a class="self-start px-6 py-3 text-black bg-yellow-500 rounded" href="https://github.com/BaselHack/BaselHack-2023#how-does-it-work" target="_blank">Post on Github <nobr>(not required!)</nobr></a> 
                    </div>
                </section>
            </div>
            <hr class="my-12 md:my-24 border-neutral-700">
            <div>
                <h2 class="mb-4 text-2xl leading-tight md:mb-2 md:text-6xl">What is a good hackathon challenge?</h2>
                <p class="text-lg font-normal md:text-xl text-neutral-300">It's characterized by certain features that encourage engagement, creativity and competition of the participants.</p>
                <div class="grid grid-cols-1 gap-8 my-12 md:gap-16 md:grid-cols-2 md:mb-24">
                    <article>
                        <h1 class="text-lg md:text-xl">Relevance</h1>
                        <hr class="my-3 border-neutral-700">
                        <p class="text-sm text-neutral-300 md:text-md">A challenge should be related to a specific topic and is appealing when it addresses a current problem. It is more exciting to develop an approach that can have a positive impact.</p>
                    </article>
                    <article>
                        <h1 class="text-lg md:text-xl">Challenge</h1>
                        <hr class="my-3 border-neutral-700">
                        <p class="text-sm text-neutral-300 md:text-md">The challenge itself can often be quite challenging. It can be difficult to push participants to use their full skillset. There should be ample room for innovation and advanced solutions to encourage the development of new technologies and ideas.</p>
                    </article>
                    <article>
                        <h1 class="text-lg md:text-xl">Goals</h1>
                        <hr class="my-3 border-neutral-700">
                        <p class="text-sm text-neutral-300 md:text-md">The challenge must set clear objectives to ensure participants understand expectations and can be effectively guided towards success. Clarity in goals is essential for a productive hackathon experience.</p>
                    </article>
                    <article>
                        <h1 class="text-lg md:text-xl">Openness</h1>
                        <hr class="my-3 border-neutral-700">
                        <p class="text-sm text-neutral-300 md:text-md">While there are goals and rules, a good hackathon challenge should leave enough room for creativity. It's important to encourage diverse approaches and solutions. This allows participants to harness their skills and ideas and develop solutions that embrace various perspectives and use cases.</p>
                    </article>
                </div>
            </div>
            <hr class="my-12 md:my-24 border-neutral-700">
            <div>
                <h2 class="mb-4 text-2xl leading-tight md:mb-2 md:text-6xl">Meet the Jury of BaselHack 2023</h2>
                <div class="my-8 text-lg">Here are the members of the jury that will judge the quality and merit of the presentations and prototypes built during the BaselHack 2023 hackathon. We rely on a good mix between representatives of the industry, academics, local authorities and the hackathon scene.</div>
                <div class="grid grid-cols-1 gap-8 my-12 md:my-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <div class="p-4 border rounded border-neutral-800">
                        <h1 class="mb-4 text-lg leading-tight">Elijah Appius</h1>
                        <p class="text-sm font-light">
                            Manager Digital Innovation - Economic Development Canton of Basel-Stadt
                        </p>
                    </div>
                    <div class="p-4 border rounded border-neutral-800">
                        <h1 class="mb-4 text-lg leading-tight">Ulrich Fiedler</h1>
                        <p class="text-sm font-light">
                            Professor @ Bern University of Applied Sciences,
                            Angel Investor Swiss ICT Investor Club (SICTIC)
                        </p>
                    </div>
                    <div class="p-4 border rounded border-neutral-800">
                        <h1 class="mb-4 text-lg leading-tight">Brigitte Hulliger</h1>
                        <p class="text-sm font-light">
                            Managing Director & Consultant in Requirements 
                            Engineering & Project Management
                            Break the Box GmbH
                        </p>
                    </div>
                    <div class="p-4 border rounded border-neutral-800">
                        <h1 class="mb-4 text-lg leading-tight">Daniel Kohler</h1>
                        <p class="text-sm font-light">
                            Board Member Innovation Basel, Digital Transformation 
                            Consultant + Software Engineer YOO AG
                        </p>
                    </div>
                    <div class="p-4 border rounded border-neutral-800">
                        <h1 class="mb-4 text-lg leading-tight">Rolf Bielser</h1>
                        <p class="text-sm font-light">
                            Computare AG: IT-Architekt, Projektleiter, Programm Manager, 
                            Consultant und agiler Coach
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-12 md:my-24">
                <h1 class="text-2xl md:text-6xl">Assessment Criteria</h1>
                <p>The teams and their presentations & prototypes will be judged by the following criteria:</p>
                <div>
                    <ul class="flex flex-col gap-2 mt-8 ml-1 list-disc list-inside">
                        <li>Innovation (novelty, value proposition)</li>
                        <li>Significance (social, technological or economic relevance)</li>
                        <li>Quality of the demonstrated prototype</li>
                        <li>Technical sophistication</li>
                        <li>Team (teamwork, diversity, learnings)</li>
                        <li>Compliance with the rules</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection