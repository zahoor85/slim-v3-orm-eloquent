<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
$settings = require __DIR__ . '/app/config/env.php';
$app = new \Slim\App($settings);
$container = $app->getContainer();

// Add to Get User IP address
$app->add(new RKA\Middleware\IpAddress());

$dependencies = require __DIR__ . '/app/config/dependencies.php';
$routes = require __DIR__ . '/app/routes/routes.php';

$app->run();
