<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new App\Router;

$router->register('/', function(){ echo 'home';});
$router->register('/invoces', function(){ echo 'invoices';});

echo $router->resolve($_SERVER['REQUEST_URI']);