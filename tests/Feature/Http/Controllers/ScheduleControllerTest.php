<?php

use App\Models\Page;
use App\Models\Section;

test('show schedule.index', function () {
    $page = Page::factory()->create(['index' => 'schedule:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $route = route('schedule.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($section->title);
})->group('schedule');
