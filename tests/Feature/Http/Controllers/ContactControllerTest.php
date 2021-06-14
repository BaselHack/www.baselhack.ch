<?php

test('test contact.index page', function () {
  $route = route('contact.index');
  $response = $this->get($route);
  $response->assertOk();
});
