<?php declare (strict_types = 1);
namespace App\Controllers;

use App\Entities\User;
use Onion\Framework\Controller\RestController;
use Onion\Framework\Http\Header\Accept;
use Onion\Framework\Rest\Response\JsonHalResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Onion\Framework\Rest\Response\JsonPlainResponse;
use Onion\Framework\Rest\Response\JsonApiResponse;
use Onion\Framework\Rest\Response\JsonLdResponse;

class Greeter extends RestController
{
    public function get(ServerRequestInterface $request, RequestHandlerInterface $requestHandler)
    {
        $user = new User();
        $user->setName(ucwords($request->getAttribute('name', 'World!')));
        $query = $request->getQueryParams();

        return new JsonApiResponse(
            $user->transform($query['includes'] ?? [], $query['fieHals'] ?? [])
        );
    }

    public function put(ServerRequestInterface $request, RequestHandlerInterface $requestHandler)
    {
        $user = new User();
        return new JsonApiResponse($user->transform(), 201);
    }
}
