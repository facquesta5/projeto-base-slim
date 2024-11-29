<?php

use Slim\Factory\AppFactory;
use App\Config\Env;

// Autoload do Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Carregar variáveis de ambiente
Env::load(__DIR__ . '/../');

// Criar a aplicação
$app = AppFactory::create();

// Carregar as rotas
(require __DIR__ . '/../src/Routes/routes.php')($app);

// Executar a aplicação
$app->run();
