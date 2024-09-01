<?php

namespace Core\Db;

use PDOException;

class DropTable
{
    public function drop(string $table)
    {
        $pdo = new Connection();
        $pdo = $pdo->connect($_ENV["DB_HOST"]);
        try {
            $pdo->exec("DROP TABLE $table ");
        } catch (PDOException $e) {
            echo "error:" . $e->getMessage();
        }
    }
}
