<?php declare(strict_types = 1);

use function Onion\Framework\compileConfigFiles;
use Onion\Framework\Dependency\Container;

$configs = (object) compileConfigFiles(__DIR__ . '/dependencies/', 'dev');
// var_dump($configs);
// exit;
return new Container($configs);
