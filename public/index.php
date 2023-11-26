<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__ ) . '/config/inport.php';
use Core\Request;
use Core\Router;
 

 
$request = new Request($_SERVER);
$router = new Router($request);
$router->prepareUri();