<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Str;

class TermsController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('terms:index')->first();
        $section = Section::where('key', 'terms')->first();

        return view('app.section.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)?->markdown(),
        ]);
    }
}
