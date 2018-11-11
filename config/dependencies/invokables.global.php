<?php declare(strict_types = 1);

use GuzzleHttp\Psr7\Response;

return [
    'invokables' => [
        \Psr\Http\Message\ResponseInterface::class => Response::class,
    ]
];
