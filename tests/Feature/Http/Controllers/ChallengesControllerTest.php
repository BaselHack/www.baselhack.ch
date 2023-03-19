<?php

use App\Models\Page;
use App\Models\Section;

test('show challenges.index', function () {
    $page = Page::factory()->create(['index' => 'challenges:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $route = route('challenges.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($section->title);
})->group('challenges');
