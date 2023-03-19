<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Views\Models\ContentDTO;

class StartController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('start::index');

        $post = Post::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->first();

        return view('app.start.index')->with([
            'page' => $content->page,
            'post' => $post,
        ]);
    }
}
