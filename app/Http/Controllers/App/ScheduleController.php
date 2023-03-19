<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Views\Models\ContentDTO;

class ScheduleController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('schedule:index');

        return view('app.section.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
        ]);
    }
}
