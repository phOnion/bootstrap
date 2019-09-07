<?php
namespace Project\Listeners;

use Onion\Framework\Server\Events\StartEvent;

class StartListener
{
    public function __invoke(StartEvent $event)
    {
        echo "Server started\n";
    }
}
