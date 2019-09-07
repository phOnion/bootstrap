<?php declare(strict_types = 1);

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest;
use Onion\Framework\Event\Dispatcher;
use Onion\Framework\Http\Drivers\HttpDriver;
use Onion\Framework\Http\Emitter\Interfaces\EmitterInterface;
use Onion\Framework\Http\Emitter\PhpEmitter;
use Onion\Framework\Server\Interfaces\DriverInterface;
use Onion\Framework\Server\Interfaces\ServerInterface;
use Onion\Framework\Server\Server;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Message\ServerRequestInterface;

return [
    'invokables' => [
        \Psr\Http\Message\ResponseInterface::class => Response::class,
        EmitterInterface::class => PhpEmitter::class,
        ServerRequestInterface::class => ServerRequest::class,
        EventDispatcherInterface::class => Dispatcher::class,
        ServerInterface::class => Server::class,
        DriverInterface::class => HttpDriver::class,
    ]
];
