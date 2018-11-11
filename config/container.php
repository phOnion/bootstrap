<?php declare(strict_types = 1);

use function Onion\Framework\compileConfigFiles;
use Onion\Framework\Dependency\Container;
use function Onion\Framework\merge;

$iterator = new \DirectoryIterator(__DIR__ . '/dependencies/');
$config = [];
foreach ($iterator as $item) {
    if ($item->isDot() || $item->isDir()) {
        continue;
    }

    $config = merge($config, include $item->getRealPath());
}

return new Container($config);
