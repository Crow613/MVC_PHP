<?php

require_once dirname(__DIR__)."/vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();

$dotenv->load(__DIR__ . '/../.env');

require dirname(__DIR__)."/router/web.php";



