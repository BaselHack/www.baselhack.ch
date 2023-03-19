<?php

use App\Models\Page;
use App\Models\Section;

test('show about.index', function () {
    $page = Page::factory()->create(['index' => 'about:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $route = route('about.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($section->title);
})->group('about');
