<?php
//seguindo a PSR-15 para criar middlewares no PHP

namespace TaskManager\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Laminas\Diactoros\Response\JsonResponse;

class AuthMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $apikey = $request->getHeaderLine("X-API-KEY");
        if ($apikey !== "secret-key") {
            return new JsonResponse(["error" => "Unauthorized"], 401);
        }

        return $handler->handle($request);
    }
}