<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Core\Request;
use Core\Router;

$confDb = require dirname(__DIR__ ) . '/config/envDB.php';
$confRoute = require dirname(__DIR__).'/config/routes.php';

$request = new Request($_SERVER);
$router = new Router($request,$confRoute);
$router->prepareUri();