<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('about:index')->first();
        $section = Section::where('key', 'about')->first();

        return view('app.about.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)?->markdown(),
        ]);
    }
}
