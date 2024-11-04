<?php

// Simple frontcontroller

require_once __DIR__ . '/../vendor/autoload.php';

$router = new \App\Core\Router();

$router->add('/', function () {
    // Call MainController
    $controller = new App\Controller\MainController();
    return $controller->index();
});

// Run the router
echo $router->run();
