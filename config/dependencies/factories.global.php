<?php declare(strict_types = 1);

use Onion\Framework\Application\Factory\ApplicationFactory;
use Onion\Framework\Application\Interfaces\ApplicationInterface;
use Onion\Framework\Http\RequestHandler\Factory\RequestHandlerFactory;
use Onion\Framework\Router\Interfaces\ResolverInterface;
use Onion\Framework\Router\Strategy\Factory\RouteStrategyFactory;
use Project\Factory\ListenerProviderFactory;
use Psr\EventDispatcher\ListenerProviderInterface;
use Psr\Http\Server\RequestHandlerInterface;

return [
    'factories' => [
        RequestHandlerInterface::class => RequestHandlerFactory::class,
        ApplicationInterface::class => ApplicationFactory::class,
        ResolverInterface::class => RouteStrategyFactory::class,
        ListenerProviderInterface::class => ListenerProviderFactory::class,
    ]
];
