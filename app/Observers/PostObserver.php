<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the user "saving" event.
     *
     * @return void
     */
    public function saving(Post $post)
    {
        $post->slug = Str::slug($post->title);
    }
}
