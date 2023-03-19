<?php

use App\Models\Company;
use App\Models\Page;
use App\Models\Section;

test('show partners.index', function () {
    $page = Page::factory()->create(['index' => 'partners:index']);
    $section = Section::factory()->create(['index' => $page->index]);

    $company = Company::factory()->published()->partner()->create();

    $route = route('partners.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSee($section->title);
})->group('partners');
