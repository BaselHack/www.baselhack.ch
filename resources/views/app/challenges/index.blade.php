@extends('app.layouts.default')

@section('content')
    <main>
        <div class="container my-16">

            <h1 class="mb-8 text-4xl">Challenges Overview Page</h1>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                @foreach($challenges as $challenge)
                    <article class="flex flex-col gap-2 p-6 bg-neutral-800 blog-post">
                        <span class="self-start block px-3 py-1 mb-2 text-white bg-black rounded">{{ $challenge->company->name }}</span>
                        <a class="inline-block mb-4" href="{{ route('challenges.show', $challenge) }}">
                            <h1 class="text-xl font-bold">{{ $challenge->title }}</h1>
                            <small class="text-neutral-300">{{ $challenge->subtitle }}</small>
                        </a>
                        <a class="flex items-center self-start gap-2 px-4 py-2 text-black transition-colors bg-yellow-500 rounded-md focus:bg-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500" href="{{ route('challenges.show', $challenge) }}">
                            <span>View Challenge</span>
                            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </article>
                @endforeach
            </div>

        </div>
    </main>
@endsection