<?php

use MVC\Router;
use MVC\Controllers\Hikes;

$router = new Router();

$router->addRoute('/my_hiking/', Hikes::class, 'index');
$router->addRoute('/my_hiking/filtered/', Hikes::class, 'filter');

return $router;