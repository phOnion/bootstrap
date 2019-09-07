<?php declare(strict_types = 1);

use Onion\Framework\Http\Middleware\HttpErrorMiddleware;
use Onion\Framework\Http\Middleware\RouteDispatchingMiddleware;

return [
    'middleware' => [
        HttpErrorMiddleware::class,
        RouteDispatchingMiddleware::class,
    ],
];
