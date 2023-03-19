<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Views\Models\ContentDTO;

class AboutController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('about:index');

        return view('app.about.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
        ]);
    }
}
