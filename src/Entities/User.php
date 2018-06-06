<?php declare(strict_types = 1);
namespace App\Entities;

use Fig\Link\Link;
use Onion\Framework\Hydrator\Interfaces\HydratableInterface;
use Onion\Framework\Hydrator\MethodHydrator;
use Onion\Framework\Rest\Entity;
use Onion\Framework\Rest\Interfaces\EntityInterface;
use Onion\Framework\Rest\Interfaces\TransformableInterface;

class User implements HydratableInterface, TransformableInterface
{
    use MethodHydrator;

    private $id;
    private $name;

    public function getId()
    {
        if ($this->id === null) {
            $this->id = mt_rand(1, 15);
        }

        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        if ($this->name === null) {
            $this->name = ['John', 'Jane', 'Jim'][mt_rand(0, 2)];
        }
        return (string) $this->name;
    }

    public function transform(iterable $includes = [], iterable $fields = []): EntityInterface
    {
        $data = [
            'id' => $this->getId(),
            'name' => $this->getName(),
        ];
        if (!empty($fields)) {
            $data = array_intersect_key($data, array_flip($fields));
        }

        return (new Entity('user'))->withData($data)
            ->withMetaData([
                'ld' => [
                    '@vocab' => 'http://schema.org/',
                    '@base' => 'http://localhost/',
                    'name' => 'firstName'
                ],
                'api' => [
                    '@type' => 'Person'
                ]
            ])->withLink(
                new Link('self',"/greet/{$this->getId()}")
            );
    }
}
