<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Challenge;
use App\Views\Models\ContentDTO;

class ChallengesController extends Controller
{

    public function index()
    {
        $content = ContentDTO::fromModel('challenges:index');
        $challenges = Challenge::where('published', true)->get();

        return view('app.challenges.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
            'challenges' => $challenges,
        ]);
    }

    public function show(Challenge $challenge)
    {
        if (! $challenge->isPublished()) {
            return redirect()->route('challenges.index');
        }

        $page = (object) [
            'robots' => 'index,follow',
            'title' => $challenge->title,
            'description' => $challenge->teaser,
            'image' => null,
        ];

        return view('app.challenges.show')->with([
            'page' => $page,
            'challenge' => $challenge,
        ]);
    }
}
