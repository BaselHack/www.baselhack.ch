<?php

use App\Models\Company;

test('show sponsors.index', function () {
    $company = Company::factory()->published()->sponsor()->create();

    $route = route('sponsors.index');
    $response = $this->get($route);
    $response->assertOk();
})->group('sponsors');
