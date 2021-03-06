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
        $post = Post::whereNotNull('published_at')->orderBy('published_at','desc')->first();
        return view('app.start.index', compact('page','post'));
    }
}
