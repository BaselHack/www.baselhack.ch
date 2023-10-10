<?php

use App\Models\Challenge;
use App\Models\Page;
use App\Models\Section;

test('show challenges.index', function () {
    $page = Page::factory()->create(['index' => 'challenges:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $challenge = Challenge::factory()->published()->create();

    $route = route('challenges.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($challenge->title);
})->group('challenges');
