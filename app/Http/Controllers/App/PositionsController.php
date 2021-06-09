<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Position;

class PositionsController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('positions:index')->first();
        $positions = Position::whereNotNull('published_at')->orderBy('published_at','desc')->get();

        return view('app.positions.index', compact('page','positions'));
    }

    public function show(Position $position)
    {
        return view('app.positions.show', compact('position'));
    }
}

