<?php

use Slim\App;
use App\Controllers\HelloController;

use App\Controllers\DatabaseController;

return function (App $app): void {
    $app->get('/hello', [HelloController::class, 'index']);

    $app->get('/test-db', [DatabaseController::class, 'testDb']);
};
