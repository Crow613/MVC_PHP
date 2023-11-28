<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__). '/config/manipulation.php';

use Core\Request;
use Core\Router;
use Config\controller\Routes;

$getConfig = new Routes;
$request = new Request();
$router = new Router($request, $getConfig->getConfig());
