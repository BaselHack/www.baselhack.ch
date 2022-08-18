<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Position;
use App\Models\Section;
use Illuminate\Support\Str;

class PositionsController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('positions:index')->first();

        $section = Section::where('key', 'positions')->first();

        $positions = Position::whereNotNull('published_at')
            ->orderBy('published_at','desc')
            ->get();

        return view('app.positions.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
            'positions' => $positions,
            ...$this->sponsors->toArray()
        ]);

    }

    public function show(Position $position)
    {
        return view('app.positions.show')->with([
            'position' => $position,
            ...$this->sponsors->toArray()
        ]);
    }
}

