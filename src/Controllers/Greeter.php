<?php declare(strict_types = 1);
namespace App\Controllers;

use App\Entities\User;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Onion\Framework\Http\Header\Accept;
use Onion\Framework\Rest\Manager;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Greeter implements MiddlewareInterface
{
    private $restManager;

    public function __construct(Manager $manager)
    {
        $this->restManager = $manager;
    }

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
        $user = new User((string) rand(1, 10));

        return $this->restManager->response(
            new Accept($request->getHeaderLine('accept')),
            $delegate->process($request),
            $user->hydrate(['name' => $request->getAttribute('name', 'unknown')])
        );
    }
}
