<?php

use App\Models\Page;
use App\Models\Section;
use App\Models\User;

test('show team.index', function () {
    $page = Page::factory()->create(['index' => 'team:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    User::factory()->create();

    $route = route('team.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($section->title);
})->group('team');
