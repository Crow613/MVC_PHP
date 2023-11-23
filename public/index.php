<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Core\Request;
use App\Core\Router;

$confDb = require dirname(__DIR__ ) . '/Config/envDB.php';
$confRout = require '../Config/routes.php';

$request = new Request( $_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD'], $confRout);
$router = new Router($request);
$router->manipullUri();
$routes = UpdateController::class('update'); 