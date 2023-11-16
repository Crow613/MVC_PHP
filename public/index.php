<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Core\Router;
$confDb = require dirname(__DIR__ ) . '/Config/envDB.php';

session_start();

$router = new Router();
$router->run();