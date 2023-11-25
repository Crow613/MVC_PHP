<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__).'/config/routes.php';
use Core\Request;
use Core\Router;

$confDb = require dirname(__DIR__ ) . '/config/envDB.php';
 
$request = new Request($_SERVER);
$router = new Router($request);
$router->prepareUri();