<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('team:index')->first();
        $section = Section::where('key', 'team')->firstOrFail();
        $teams = User::whereProfilePublished(true)->orderBy('name')->get();

        return view('app.section.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
            'teams' => $teams,
        ]);
    }
}
