<?php

use App\Models\Page;
use App\Models\Position;
use App\Models\Post;
use App\Models\Section;

test('start.index', function () {
    $route = route('start.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('posts.index', function () {
    $route = route('posts.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('post.show', function () {
    $post = Post::factory()->create();
    $route = route('posts.show', $post);
    $response = $this->get($route);
    $response->assertOk();
});

test('team.index', function () {
    $route = route('team.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('partners.index', function () {
    $route = route('partners.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('sponsors.index', function () {
    $route = route('sponsors.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('positions.index', function () {
    $route = route('positions.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('positions.show', function () {
    $position = Position::factory()->create();
    $route = route('positions.show', $position);
    $response = $this->get($route);
    $response->assertOk();
});

test('contact.index', function () {
    $route = route('contact.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('privacy.index', function () {
    $route = route('privacy.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('terms.index', function () {
    $route = route('terms.index');
    $response = $this->get($route);
    $response->assertOk();
});
