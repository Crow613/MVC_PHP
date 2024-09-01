<?php
namespace Core;

use Core\Db\DB;

abstract class Models
{
    public static function get(): array|false
    {
        $db = new DB();
        return $db->select();
    }
    public static function find(int $id)
    {
        $db = new DB();
        return $db->select()[$id];
    }
}
