<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Services\HelloService;

class HelloController
{
    private HelloService $service;

    public function __construct()
    {
        $this->service = new HelloService();
    }

    public function index(Request $request,Response $response): Response 
    {
        $message = $this->service->getMessage();
        $response->getBody()->write($message);
        return $response->withHeader('Content-Type', 'text/plain');
    }

    public function testDb()
    {
        $service = new HelloService();
        $data = $service->fetchData();

        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
