<?php

use App\Models\Page;
use App\Models\Section;

test('show event.index', function () {
    $page = Page::factory()->create(['index' => 'event:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $route = route('event.index');
    $response = $this->get($route);
    $response->assertOk();
})->group('event');
