<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Position;
use App\Views\Models\ContentDTO;

class PositionsController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('positions:index');

        $positions = Position::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('app.positions.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
            'positions' => $positions,
        ]);
    }

    public function show(Position $position)
    {
        if (! $position->isPublished()) {
            return redirect()->route('positions.index');
        }

        return view('app.positions.show')->with([
            'position' => $position,
        ]);
    }
}
