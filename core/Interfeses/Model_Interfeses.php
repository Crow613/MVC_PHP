<?php

namespace Core\Interfeses;

interface Model_Interfese
{
    public static function get(string $param);
    public static function find(int $id);
}
