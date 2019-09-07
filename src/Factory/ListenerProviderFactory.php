<?php
namespace Project\Factory;

use Onion\Framework\Dependency\Interfaces\FactoryInterface;

use Onion\Framework\Event\ListenerProviders\SimpleProvider;

class ListenerProviderFactory implements FactoryInterface
{
    public function build(\Psr\Container\ContainerInterface $container)
    {
        $listeners = [];
        foreach ($container->get('events.listeners') as $event => $listeners) {
            $listeners[$event] = array_map([$container, 'get'], $listeners);
        }

        return new SimpleProvider($listeners);
    }
}
