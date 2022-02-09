<?php

return [
    'namespaces' => [
        'models' => 'App\\Models\\',
        'controllers' => 'App\\Http\\Controllers\\'
    ],
    'auth' => [
        'guard' => 'api'
    ],
    'specs' => [
        'info' => [
            'title' => env('APP_NAME'),
            'description' => null,
            'terms_of_service' => null,
            'contact' => [
                'name' => null,
                'url' => null,
                'email' => null,
            ],
            'license' => [
                'name' => null,
                'url' => null,
            ],
            'version' => '1.0.0',
        ],
        'servers' => [
            ['url' => env('APP_URL'), 'description' => 'Default Environment'],
            ['url' => env('APP_URL').':5001', 'description' => '5001 port'],
        ],
    ],
    'transactions' => [
        'enabled' => false,
    ],
    'search' => [
        'case_sensitive' => false, // TODO: set to "false" by default in 3.0 release
    ]
];
