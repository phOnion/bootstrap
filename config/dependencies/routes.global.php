<?php declare(strict_types = 1);

use App\Controllers as Controller;
return [
    'routes' => [
        [
            'pattern' => '/',
            'middleware' => [
                \App\Middleware\BenchmarkMiddleware::class,
                Controller\Index::class
            ],
            'methods' => ['GET']
        ], [
            'pattern' => '/greet',
            'middleware' => [
                Controller\Greeter::class
            ],
            'methods' => ['GET']
        ], [
            'pattern' => '/greet/{name}',
            'middleware' => [
                Controller\Greeter::class
            ],
            'methods' => ['GET']
        ]
    ]
];
