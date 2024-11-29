<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Services\HelloService;

class DatabaseController
{
    public function testDb(Request $request, Response $response): Response
    {
        $service = new HelloService();
        $data = $service->fetchData();

        // Formata a saída como JSON e define o tipo de conteúdo no Response
        $response->getBody()->write(json_encode($data, JSON_PRETTY_PRINT));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }
}