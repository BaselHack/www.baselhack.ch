<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Views\Models\ContentDTO;

class SponsorsController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('sponsors:index');

        return view('app.sponsors.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
        ]);
    }
}
