<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Views\Models\ContentDTO;

class PostsController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('posts:index');

        $posts = Post::published()->orderBy('published_at', 'desc')->get();

        return view('app.posts.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        if (! $post->isPublished()) {
            return redirect()->route('posts.index');
        }

        $page = (object) [
            'robots' => 'index,follow',
            'title' => $post->title,
            'description' => $post->teaser,
            'image' => null,
        ];

        return view('app.posts.show')->with([
            'page' => $page,
            'post' => $post,
        ]);
    }
}
