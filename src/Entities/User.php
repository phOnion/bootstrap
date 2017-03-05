<?php declare(strict_types = 1);
namespace App\Entities;

use Onion\Framework\Hydrator\Interfaces\HydratableInterface;
use Onion\Framework\Hydrator\MethodHydrator;

class User implements HydratableInterface
{
    use MethodHydrator;

    private $id;
    private $name;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }
}
