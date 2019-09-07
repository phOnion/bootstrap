<?php declare(strict_types = 1);
require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Psr7\ServerRequest;
use Onion\Framework\Application\Interfaces\ApplicationInterface;

$container = include __DIR__ . '/../config/container.php';

$container->get(ApplicationInterface::class)
    ->run(ServerRequest::fromGlobals());
