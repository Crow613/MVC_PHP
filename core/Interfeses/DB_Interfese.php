<?php
namespace Core\Interfeses;

use Core\Request;

interface DB_Interfese
{
    public function connection();
    public function select(string $table);
}
