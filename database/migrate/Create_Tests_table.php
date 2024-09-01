<?php
namespace Db\migrate;

use Core\Db\Table;

class Create_Tests_table extends Table
{
    public function up()
    {
        return [
            $this->id(),
            $this->int("price"),
            $this->string("name", 5),
            $this->string("emile", 50),
        ];
    }
}
