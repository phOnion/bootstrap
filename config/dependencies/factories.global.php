<?php declare(strict_types = 1);

use Onion\Framework\Application\Factory\ApplicationFactory;
use Onion\Framework\Application\Interfaces\ApplicationInterface;
use Onion\Framework\Http\Middleware\Factory\RequestHandlerFactory;
use Psr\Http\Server\RequestHandlerInterface;

return (object) [
    RequestHandlerInterface::class => RequestHandlerFactory::class,
    ApplicationInterface::class => ApplicationFactory::class,
];
