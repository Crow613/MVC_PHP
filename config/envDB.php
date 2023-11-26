<?php
 

return [

    'host' => $_ENV['MYSQL_HOST'],
    'port' => $_ENV['MYSQL_PORT'],
    'database' => $_ENV['MYSQL_DATABASE'],
    'username' => $_ENV['MYSQL_USER'],
    'password' => $_ENV['MYSQL_PASSWORD'],
    'charset' => 'utf8mb4'
    
];
echo 'hi';