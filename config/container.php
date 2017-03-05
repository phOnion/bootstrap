<?php declare(strict_types = 1);

$factory = new class implements \Onion\Framework\Dependency\Interfaces\FactoryInterface
{
    public function build(\Psr\Container\ContainerInterface $container)
    {
        $dependencies = [];
        $iterator = new DirectoryIterator(__DIR__ . '/dependencies/');

        /**
         * @var $iterator DirectoryIterator
         */
        while($iterator->valid()) {
            if ($iterator->current()->isFile()) {
                if ($iterator->getExtension() === 'php') {
                    $file = __DIR__ . '/dependencies/' .$iterator->getBasename();
                    $dependencies = array_merge(
                        $dependencies,
                        [$iterator->getBasename('.php') => include $file]
                    );
                }
            }

            $iterator->next();
        }

        return new \Onion\Framework\Dependency\Container($dependencies);
    }
};

/**
 * @ToDo: Change implementation (possibly best with APCu or memcached)
 */
$cache = new \Development\Cache\ArrayCache();

return new \Onion\Framework\Dependency\CacheAwareContainer($factory, $cache);

