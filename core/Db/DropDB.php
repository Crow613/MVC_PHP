<?php

require dirname(__DIR__) . "/db/RoutUse.php";

use Core\Db\Connection;

$db = $_ENV["DB_NAME"];
$pdo = new Connection();
$pdo = $pdo->connect($_ENV["DB_HOST_CONSOLE"]);

$pdo->exec("DROP DATABASE $db");
