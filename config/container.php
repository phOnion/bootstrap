<?php

use Onion\Framework\Dependency\ProxyContainer;

$containers = include __DIR__ . '/../container.generated.php';

$container = new ProxyContainer;
foreach ($containers as $c) {
    $container->attach($c);
}

return $container;
