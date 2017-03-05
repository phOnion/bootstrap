<?php declare(strict_types = 1);
namespace Development\Rest;

use Onion\Framework\Dependency\Interfaces\FactoryInterface;
use Onion\Framework\Rest\Manager;
use Onion\Framework\Rest\Transformer;
use Psr\Container\ContainerInterface as Container;
use Onion\Framework\Rest\Serializers;

class ManagerFactory implements FactoryInterface
{
    /**
     * Method that is called by the container, whenever a new
     * instance of the application is necessary. It is the only
     * method called when creating instances and thus, should
     * produce/return the fully configured object it is intended
     * to build.
     *
     * @param Container $container
     *
     * @return mixed
     */
    public function build(Container $container)
    {
        return new Manager(
            new Transformer($container->get('rest_mappings')),
            [
                new Serializers\PlainJsonSerializer(),
                new Serializers\HalJsonSerializer(),
                new Serializers\JsonApiSerializer(),
                new Serializers\JsonLdSerializer(),
                new HtmlSerializer()
            ]
        );
    }
}