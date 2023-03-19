<?php

use App\Models\Post;

test('show posts.index', function () {
    Post::factory(10)->published()->create();
    $route = route('posts.index');
    $response = $this->get($route);
    $response->assertOk();
})->group('posts');

test('redirect unpublished post.show', function () {
    $post = Post::factory()->create();
    $route = route('posts.show', $post);
    $response = $this->get($route);
    $response->assertRedirect(route('posts.index'));
})->group('posts');

test('show published post.show', function () {
    $post = Post::factory()->published()->create();
    $route = route('posts.show', $post);
    $response = $this->get($route);
    $response->assertOk();
})->group('posts');
