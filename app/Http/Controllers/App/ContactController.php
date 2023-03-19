<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Views\Models\ContentDTO;

class ContactController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('contact:index');

        return view('app.contact.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
        ]);
    }
}
