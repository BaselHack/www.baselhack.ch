<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Str;

class ChallengesController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('challenges:index')->first();
        $section = Section::where('key', 'challenges')->first();
        return view('app.challenges.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
        ]);
    }
}
