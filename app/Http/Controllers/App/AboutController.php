<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('about:index')->first();
        $section = Section::where('key', 'about')->first();

        return view('app.section.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)?->markdown(),
        ]);
    }
}
