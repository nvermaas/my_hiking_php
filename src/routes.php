<?php

use MVC\Router;
use MVC\Controllers\Hikes;

$router = new Router();

$router->addRoute('/', Hikes::class, 'index');
$router->addRoute('/my_hiking/', Hikes::class, 'index');
return $router;