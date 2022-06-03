<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\Section;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('posts:index')->first();
        $section = Section::where('key', 'posts')->first();
        $posts = Post::published()->orderBy('published_at', 'desc')->get();

        return view('app.posts.index')->with([
            'page' => $page,
            'title' => $section?->title ?? '',
            'teaser' => $section?->teaser ?? '',
            'body' => Str::of($section?->body ?? '')->markdown(),
            'posts' => $posts,
        ]);

    }

    public function show(Post $post)
    {
        $page = (object)[
            'robots' => 'index,follow',
            'title' => $post->title,
            'description' => $post->teaser,
            'image' => null,
        ];

        return view('app.posts.show', compact('page', 'post'));
    }
}
