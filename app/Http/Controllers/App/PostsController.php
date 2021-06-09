<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        $page = (object) [
           'robots' => 'index,follow',
            'title' => $post->title,
            'description' =>  $post->teaser,
            'image' => null,
        ];

        return view('app.posts.show', compact('page','post'));
    }
}
