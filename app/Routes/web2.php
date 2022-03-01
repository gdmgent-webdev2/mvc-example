<?php

use App\Http\Controllers\HelloController;
use Slim\Factory\AppFactory;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

$app = AppFactory::create();

// Add routes
$app->get('/', function (Request $request, Response $response) {
    $controller = new HelloController();
    $response->getBody()->write($controller->showDutchHello());
    // $response->getBody()->write('<a href="/hello/world">Try /hello/world</a>');
    return $response;
});

$app->run();
