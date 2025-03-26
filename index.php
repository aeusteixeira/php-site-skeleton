<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Carrega as rotas web
require __DIR__ . '/routes/web.php';

// Run it!
$router->run();