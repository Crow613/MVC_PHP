<?php
require dirname(__DIR__) . '/config/app.php';
require dirname(__DIR__) . '/config/cURI.php';
require_once dirname(__DIR__) . "/vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

use function Config\view;
use function Config\method;
require dirname(__DIR__) . "/router/web.php";