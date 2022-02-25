<?php
// use of namespaces

use App\Http\Controllers\HelloController;
use App\Providers\Router;
use Illuminate\Database\Capsule\Manager as Capsule;


// define current directory as basepath
define('BASEPATH', __DIR__);

// composer autoloading, to load libs
require BASEPATH . '/../vendor/autoload.php';



$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'mvc-demo',
    'username' => 'root',
    'password' => 'secret',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();




// instantiate new router
$router = new Router();
$router->add('/', function() {
    echo 'welcome to our website';
});
$router->add('/hello', function() {
    $controller = new HelloController();
    echo $controller->showDutchHello();

});
$router->dispatch(); // beam me up, scotty!
