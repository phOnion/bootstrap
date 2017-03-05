<?php declare(strict_types = 1);
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Dependency container
 *
 * @var \Psr\Container\ContainerInterface $container
 */
$container = include __DIR__ . '/../config/container.php';

$container->get(\Onion\Framework\Application\Interfaces\ApplicationInterface::class)
    ->run($container->get(\Psr\Http\Message\ServerRequestInterface::class));
