<?php

require dirname(__DIR__) . "/MVC_PHP/vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;
use Core\db\console\Insert;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . "/.env");

function insert()
{
    $test = new Insert();
    $test->add();
}

insert();