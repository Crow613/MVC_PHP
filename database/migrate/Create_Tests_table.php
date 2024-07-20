<?php
namespace Db\migrate;

use Core\Db\DB;
use Core\Db\Table;

class Create_Tests_table extends Table
{
    public  function up( )
    {
        $db = new DB();

      return [
              $this->id(),
              $this->int('price'),
              $this->string('name',5)
            ];
    }
}
