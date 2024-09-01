<?php

namespace Core\Db;

abstract class Table
{
    public function id()
    {
        return "Id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key'";
    }
    public function int(string $number): string
    {
        return "$number INTEGER";
    }
    public function string(string $string, ?int $num): string|int
    {
        if ($num) {
            return "$string varchar($num)";
        }
        return "$string varchar(255)";
    }
}
