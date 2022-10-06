<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Str;

class ScheduleController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('schedule:index')->first();
        $section = Section::where('key', 'schedule')->first();
        return view('app.schedule.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
        ]);
    }
}
