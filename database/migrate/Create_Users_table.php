<?php

namespace Db\migrate;

use Core\Db\Table;

class Create_Users_table extends Table
{
    public function up()
    {
        return [$this->int("num"), $this->string("hahs", 12)];
    }
}
