<?php
// use of namespaces
use App\Providers\Router;
use Illuminate\Database\Capsule\Manager as Capsule;

// define current directory as basepath
define('BASEPATH', __DIR__);

// composer autoloading, to load libs
require BASEPATH . '/../vendor/autoload.php';

// register error handling
$whoops = new Whoops\Run;
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler);
$whoops->register();

// database
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
include BASEPATH . "/Routes/web.php";
$router->dispatch(); // beam me up, scotty!
