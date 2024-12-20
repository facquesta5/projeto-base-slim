<?php

use Slim\App;
use App\Controllers\HelloController;

use App\Controllers\DatabaseController;
use App\Controllers\IndexController;

return function (App $app): void {
    $app->get('/', [IndexController::class, 'index']); 

    $app->get('/hello', [HelloController::class, 'index']);

    $app->get('/test-db', [DatabaseController::class, 'testDb']);
    
    
};
