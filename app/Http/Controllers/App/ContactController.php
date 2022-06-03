<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('contact:index')->first();
        $section = Section::where('key', 'contact')->first();
        return view('app.contact.index')->with([
            'page' => $page,
            'title' => $section?->title ?? '',
            'teaser' => $section?->teaser ?? '',
            'body' => Str::of($section?->body ?? '')->markdown(),
        ]);
    }
}
