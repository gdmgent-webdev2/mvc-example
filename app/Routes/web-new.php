<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\UsersController;
use App\Providers\Router;
use Illuminate\Database\Capsule\Manager as Capsule;
use Slim\Factory\AppFactory;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

// slim app factory creation, for eeezeee routing
$app = AppFactory::create();

// home route
$app->get('/', function(Request $request, Response $response) {
    $controller = new HelloController();

    $response->getBody()->write($controller->showDutchHello());
    return $response;
});

// user detail route, with id wildcard
$app->get('/users/{id}', function(Request $request, Response $response, $args) {
    // get id from restful url
    $id = $args['id'];

    // instantiate userscontroller
    $controller = new UsersController();

    // return view, via controller action
    $response->getBody()->write($controller->show($id));
    return $response;
});

// beam me up, scotty
$app->run();