<?php
namespace Project\Listeners;

use function GuzzleHttp\Psr7\str;
use Onion\Framework\Http\Events\RequestEvent;
use Onion\Framework\Loop\Interfaces\AsyncResourceInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RequestListener
{
    private $handler;
    public function __construct(RequestHandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    public function __invoke(RequestEvent $event)
    {
        $connection = $event->getConnection();
        $response = (clone $this->handler)->handle($event->getRequest());
        yield $connection->wait(AsyncResourceInterface::OPERATION_WRITE);
        $connection->write(str($response));
        $connection->close();
    }
}
