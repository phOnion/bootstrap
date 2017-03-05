<?php declare(strict_types = 1);
namespace App\Middleware;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class BenchmarkMiddleware implements MiddlewareInterface
{

    /**
     * Process an incoming server request and return a response, optionally delegating
     * to the next middleware component to create the response.
     *
     * @param ServerRequestInterface $request
     * @param DelegateInterface $delegate
     *
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        $start = memory_get_usage();
        $response = $delegate->process($request);
        $end = memory_get_usage();

        $response->getBody()->write(' -- Memory usage ' . round(($end - $start) / 1024, 3) . 'KB');

        return $response;
    }
}
