<?php

use App\Models\Page;
use App\Models\Section;
use App\Models\Post;
use App\Models\Position;

test('start.index', function () {
    $route = route('start.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('posts.index', function () {
    $route = route('posts.index');
    $response = $this->get($route);
    $response->assertOk();
})->skip();

test('post.show', function () {
    $post = Post::factory()->create();
    $route = route('posts.show', $post);
    $response = $this->get($route);
    $response->assertOk();
})->skip();

test('team.index', function () {
    $route = route('team.index');
    $response = $this->get($route);
    $response->assertOk();
})->skip();

test('partners.index', function () {
    $route = route('partners.index');
    $response = $this->get($route);
    $response->assertOk();
})->skip();

test('sponsors.index', function () {
    $route = route('sponsors.index');
    $response = $this->get($route);
    $response->assertOk();
})->skip();

test('positions.index', function () {
    $route = route('positions.index');
    $response = $this->get($route);
    $response->assertOk();
})->skip();

test('positions.show', function () {
    $position = Position::factory()->create();
    $route = route('positions.show', $position);
    $response = $this->get($route);
    $response->assertOk();
})->skip();

test('contact.index', function () {
    $route = route('contact.index');
    $response = $this->get($route);
    $response->assertOk();
})->skip();


test('privacy.index', function () {
    $route = route('privacy.index');
    $response = $this->get($route);
    $response->assertOk();
})->skip();

test('terms.index', function () {

     Page::factory()->create([
        'index' => 'terms.index'
    ]);

    Section::factory()->create([
        'key' => 'terms'
    ]);

    $route = route('terms.index');
    $response = $this->get($route);
    $response->assertOk();
})->skip();
