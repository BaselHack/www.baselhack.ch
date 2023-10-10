<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Views\Models\ContentDTO;

class PartnersController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('partners:index');

        return view('app.partners.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
        ]);
    }
}
