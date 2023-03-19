<?php

use App\Models\Page;
use App\Models\Section;

test('show privacy.index', function () {
    $page = Page::factory()->create(['index' => 'privacy:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $route = route('privacy.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($section->title);
})->group('privacy');
