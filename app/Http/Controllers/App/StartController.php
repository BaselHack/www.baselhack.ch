<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Post;


class StartController extends Controller
{

    public function index()
    {
        $page = Page::whereIndex('start:index')->first();
        $posts = Post::whereNotNull('published_at')->orderBy('published_at','desc')->get();
        return view('app.start.index', compact('page','posts'));
    }
}
