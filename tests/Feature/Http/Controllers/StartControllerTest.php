<?php

use App\Models\Page;
use App\Models\Post;

test('show start.index', function () {
    $page = Page::factory()->create(['index' => 'start:index']);
    Post::factory()->published()->create();

    $route = route('start.index');
    $response = $this->get($route);
    $response->assertOk();
});
