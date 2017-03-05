<?php declare(strict_types = 1);

return [
    \Psr\Http\Message\ServerRequestInterface::class =>
        \Onion\Framework\Http\Factory\ServerRequestFactory::class,
    \Interop\Http\ServerMiddleware\DelegateInterface::class =>
        \Onion\Framework\Application\Factory\GlobalDelegateFactory::class,
    \Onion\Framework\Router\Interfaces\RouterInterface::class =>
        \Onion\Framework\Router\Factory\RouterFactory::class,
    \Onion\Framework\Application\Interfaces\ApplicationInterface::class =>
        \Onion\Framework\Application\Factory\ApplicationFactory::class,
    \Onion\Framework\Rest\Manager::class => \Development\Rest\ManagerFactory::class
];
