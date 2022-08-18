<?php

return [

    'title' => 'Newsletter Subscription',
    'subtitle' => 'Get the latest news about the BaselHack to your inbox. You can unsubscribe anytime.',

    'form' => [

        'input' => [
            'email' => 'Email address'
        ],
        'button' => 'Subscribe',
        'privacy' => 'We care about the protection of your data.',

    ],

    'notification' => [
        'success' => [
            'description' => 'Thank you!, You\'ve successfully signed up to our newsletter!',
        ],

        'error' => [
            'description' => 'Ohhps!, Something went wrong. Please try again later!',
        ],
    ],

];
