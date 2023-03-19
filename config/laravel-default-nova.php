<?php

return [

    'prevent_lazy_loading' => false,
    'with_breadcrumbs' => true,
    'without_notifications' => true,
    'resource_in' => 'Nova/Resources',
    'initial_path' => '/resources/user-resources',

    'assets' => [],

    'policies' => [
        'namespace' => 'App\\Policies\\Nova\\',
    ],

];
