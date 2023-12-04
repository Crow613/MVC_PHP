<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
//require_once dirname(__DIR__). '/conf/methods/methods.php';

use Core\Request;
use Core\Router;

$request = new Request();
$router = new Router($request);
