<?php

use MVC\Router;
use MVC\Controllers\HikeController;

$router = new Router();

$router->addRoute('/', HikeController::class, 'index');