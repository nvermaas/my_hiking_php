<?php

use MVC\Router;
use MVC\Controllers\HikesController;
use MVC\Controllers\HikeDetailsController;

$router = new Router();

$router->addRoute('/my_hiking/', HikesController::class, 'index');
$router->addRoute('/my_hiking/country/([a-zA-Z0-9_-]+)', HikesController::class, 'country');
$router->addRoute('/my_hiking/hike/', HikeDetailsController::class, 'show');
$router->addRoute('/my_hiking/hike/(\d+)', HikeDetailsController::class, 'show');

return $router;