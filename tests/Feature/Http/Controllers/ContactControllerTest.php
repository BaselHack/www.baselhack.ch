<?php

use App\Models\Page;
use App\Models\Section;

test('show contact.index', function () {
    $page = Page::factory()->create(['index' => 'contact:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $route = route('contact.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($section->title);
})->group('contact');
