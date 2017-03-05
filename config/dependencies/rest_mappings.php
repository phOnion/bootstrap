<?php declare(strict_types = 1);

return [
    \App\Entities\User::class => [
        'rel' => 'Person',
        'links' => [
            ['rel' => 'self', 'href' => '/greeter/{name}']
        ],
        'fields' => ['id', 'name'],
        'relations' => [],
        'meta' => [
            'ld' => [
                '@vocab' => 'http://schema.org/',
                '@base' => 'http://localhost/',
                'name' => 'firstName'
            ],
            'api' => [
                '@type' => 'Person'
            ]
        ]
    ]
];
