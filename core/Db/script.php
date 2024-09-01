<?php

require dirname(__DIR__) . "/db/RoutUse.php";

use Core\Db\Insert;

function add()
{
    $test = new Insert();
    $test->add();
}

add();
