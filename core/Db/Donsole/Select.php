<?php

namespace Core\Db;

use PDO;
use PDOException;

class Select
{
    public function get()
    {
        $pdo = new Connection();
        $pdo = $pdo->connect($_ENV["DB_HOST"]);
        $sql = "SELECT * FROM Tests";
        $stmt = $pdo->query($sql);

        try {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Ошибка при выборке данных: " . $e->getMessage());
        }
    }
}
