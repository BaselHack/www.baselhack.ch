<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Views\Models\ContentDTO;

class AboutController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('about:index');
        $teams = User::active()->orderBy('name')->get();

        return view('app.about.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
            'teams' => $teams,
        ]);
    }
}
