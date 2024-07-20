<?php

namespace Core\Db;

use Core\Interfeses\DB_Interfese;
use PDO;
use PDOException;

class DB  implements DB_Interfese
{
    /**
     * Summary of connection
     * @return PDO
     */
    public function connection(): PDO
    {
        $dbname = $_ENV["DB_NAME"];
        $name = $_ENV["DB_USER"];
        $password = $_ENV["DB_PASS"];
        $port = $_ENV["DB_PORT"];

        try {
            $db = new PDO(
                "mysql:host=db;port=$port;dbname=$dbname;charset=utf8mb4",
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



    public function select(string $table)
    {

        $pdo = $this->connection();
        $sql = "SELECT * FROM $table ";
        $stmt = $pdo->query($sql);

        try {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Ошибка при выборке данных: " . $e->getMessage());

        }
    }
}
