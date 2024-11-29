<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Services\HelloService;

class HelloController
{
    private HelloService $service;

    public function __construct()
    {
        $this->service = new HelloService();
    }

    public function index(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
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
