<?php

use App\Models\Page;
use App\Models\Section;

test('show terms.index', function () {
    $page = Page::factory()->create(['index' => 'terms:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $route = route('terms.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($section->title);
})->group('terms');
