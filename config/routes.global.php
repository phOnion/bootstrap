<?php declare(strict_types = 1);

use Onion\Framework\Router\Strategy\CompiledRegexStrategy;

return [
    'router' => [
        'resolver' => CompiledRegexStrategy::class,
        'count' => 10,
    ],
    'routes' => [
        [
            'pattern' => '/',
            'middleware' => [
                \App\HelloWorld::class,
            ]
        ]
    ]
];
