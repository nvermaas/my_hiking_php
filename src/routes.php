<?php

use MVC\Router;
use MVC\Controllers\Hikes;
use MVC\Controllers\HikeDetailsController;

$router = new Router();

$router->addRoute('/my_hiking/', Hikes::class, 'index');
$router->addRoute('/my_hiking/hike/', HikeDetailsController::class, 'show');
$router->addRoute('/my_hiking/hike/(\d+)', HikeDetailsController::class, 'show');

return $router;