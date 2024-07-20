<?php
namespace Core;

use Core\Db\DB;
use Core\Interfeses\Model_Interfese;

abstract class Models implements Model_Interfese
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
