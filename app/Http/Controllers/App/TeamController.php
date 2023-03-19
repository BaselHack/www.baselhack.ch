<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Views\Models\ContentDTO;

class TeamController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('team::index');

        $teams = User::active()->orderBy('name')->get();
        $alumni = User::alumni()->orderBy('name')->get();

        return view('app.team.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
            'teams' => $teams,
            'alumni' => $alumni,
        ]);
    }
}
