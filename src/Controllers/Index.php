<?php declare (strict_types = 1);
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Onion\Framework\Controller\RestController;
use Psr\Http\Server\RequestHandlerInterface;
use function GuzzleHttp\Psr7\stream_for;

class Index extends RestController
{
    public function get(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {
        return $handler->handle($request)->withBody(
            stream_for('Hello, World!')
        );
    }
}
