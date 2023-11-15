<?php

use App\core\Router;
require 'app/Lib/Dev.php';
require_once 'vendor/autoload.php';

spl_autoload_register(function($class){

    $path = str_replace('\\', '/', $class.'.php');

    if(file_exists($path)){

        require $path;
    }

});

$us = new Router;