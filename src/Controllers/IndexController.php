<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Services\IndexService;

class IndexController
{
    private IndexService $service;

    public function index(Request $request,Response $response): Response 
    {
        $response->getBody()->write(
            file_get_contents(__DIR__ . '/../Views/index.php')
        );
        return $response;
    }

    
}
