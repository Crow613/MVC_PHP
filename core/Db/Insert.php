<?php
namespace Core\Db;

use PDOException;


class Insert
{
    public static function insert()
    {

        $pdo = new DB();

        $path = "./../database/migrate/*";

        try {
            foreach (glob($path) as $e) {
                $table = rtrim(
                    substr_replace(
                        $e,
                        "",
                        strpos($e, "./../database/migrate/Create"),
                        strlen("./../database/migrate/Create_")
                    ),
                    "_table.php"
                );

                $class = "Db\\migrate\\"."Create_" . $table . "_table";
                $mig = new $class();

                $stolb = implode(",", $mig->up());

                $pdo->connection()->exec("CREATE TABLE $table ($stolb,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)");

                echo "Table executed";
                die();
            }

            die();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}

return Insert::insert();