<?php
namespace App;

use function GuzzleHttp\Psr7\stream_for;
use Onion\Framework\Controller\RestController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use Psr\Http\Server\RequestHandlerInterface;

class HelloWorld extends RestController
{
    public function get(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        return $handler->handle($request)->withBody(stream_for('Hello, World!'));
    }
}
