<?php
namespace Core\Db;

use PDOException;

class Insert
{
    public function add()
    {
        $pdo = new Connection();
        $pdo = $pdo->connect($_ENV["DB_HOST_CONSOLE"]);

        $path = dirname(__DIR__) . "/../database/migrate/*";

        try {
            foreach (glob($path) as $e) {
                $sab = substr($e, strpos($e, "Create_"));
                preg_match("/_(.*?)_/", $sab, $table);

                $classPath = "Db\\migrate\\" . "Create_" . $table[1] . "_table";
                $class = new $classPath();

                $sql = implode(",", $class->up());

                $pdo->exec(
                    "CREATE TABLE $table[1] ($sql,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)"
                );

                echo "->Migration Table $table[1] created,";
            }

            die();
        } catch (PDOException $e) {
            echo "->..." . $e->getMessage();
            die();
        }
    }
}
