<?php

namespace Core\Db;

use PDO;
use PDOException;

class Connection
{
    /**
     * Summary of connection
     * @return PDO
     */
    public function connect(string $host): PDO
    {
        $dbname = $_ENV["DB_NAME"];
        $name = $_ENV["DB_USER"];
        $password = $_ENV["DB_PASS"];
        $port = $_ENV["DB_PORT"];

        try {
            $db = new PDO(
                "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
                $name,
                $password
            );
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}
