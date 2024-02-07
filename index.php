<?php

require 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

echo "<script>alert('$uri');</script>";

$router = require 'src/routes.php';
$router->dispatch($uri);