<?php

use App\Models\Position;

test('show positions.index', function () {
    Position::factory(10)->published()->create();
    $route = route('positions.index');
    $response = $this->get($route);
    $response->assertOk();
})->group('positions');

test('redirect unpublished positions.show', function () {
    $post = Position::factory()->create();
    $route = route('positions.show', $post);
    $response = $this->get($route);
    $response->assertRedirect(route('positions.index'));
})->group('positions');

test('show published positions.show', function () {
    $post = Position::factory()->published()->create();
    $route = route('positions.show', $post);
    $response = $this->get($route);
    $response->assertOk();
})->group('positions');
