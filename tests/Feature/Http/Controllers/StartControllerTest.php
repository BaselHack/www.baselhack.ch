<?php

test('test start.index page', function () {
  $route = route('start.index');
  $response = $this->get($route);
  $response->assertOk();
});
