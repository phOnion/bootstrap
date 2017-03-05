<?php declare(strict_types = 1);

use App\Controllers as Controller;
return [
    [
        'pattern' => '/',
        'middleware' => [
            Controller\Index::class
        ],
        'methods' => ['GET']
    ], [
        'pattern' => '/greet[/[name]]',
        'middleware' => [
            \App\Middleware\BenchmarkMiddleware::class,
            Controller\Greeter::class
        ],
        'methods' => ['GET']
    ]
];
