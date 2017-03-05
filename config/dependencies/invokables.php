<?php declare(strict_types = 1);

return [
    \Psr\Http\Message\ResponseInterface::class => Zend\Diactoros\Response::class,
    \Zend\Diactoros\Response\EmitterInterface::class => \Zend\Diactoros\Response\SapiEmitter::class,
    \Onion\Framework\Router\Interfaces\ParserInterface::class => \Onion\Framework\Router\Parsers\Regex::class,
    \Onion\Framework\Router\Interfaces\MatcherInterface::class => \Onion\Framework\Router\Matchers\Regex::class
];
