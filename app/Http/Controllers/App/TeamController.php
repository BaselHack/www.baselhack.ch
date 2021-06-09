<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\User;

class TeamController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('team:index')->first();
        $teams = User::whereProfilePublished(true)->orderBy('name')->get();
    
        return view('app.team.index', compact('page','teams'));
    }
}
