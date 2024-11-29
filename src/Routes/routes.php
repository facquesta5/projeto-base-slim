<?php

use Slim\App;
use App\Controllers\HelloController;

return function (App $app): void {
    $app->get('/hello', [HelloController::class, 'index']);

    $app->get('/test-db', [HelloController::class, 'testDb']);
};
