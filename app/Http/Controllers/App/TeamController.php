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
        $section = Section::where('key', 'team')->first();

        $teams = User::active()->orderBy('name')->get();
        $alumni = User::alumni(true)->orderBy('name')->get();

        return view('app.team.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
            'teams' => $teams,
            'alumni' => $alumni,
        ]);
    }
}
