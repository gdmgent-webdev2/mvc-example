<?php
use App\Http\Controllers\HelloController;
use App\Http\Controllers\UsersController;

$router->add('/', function() {
    echo 'welcome to our website';
});
$router->add('/hello', function() {
    $controller = new HelloController();
    echo $controller->showDutchHello();
});


$router->add('/users', function() {
    $controller = new UsersController();
    echo $controller->index();
});

$router->add('/users/1', function() {
    $controller = new UsersController();
    echo $controller->show(1);
});