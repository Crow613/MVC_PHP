<?php

namespace App\Http\Controllers;

use Core\Db\Insert;


class TestController extends Controllers
{
    public function index()
    {
        $db = new Insert();
        dd($db->insert());
    }
    public function email()
    {
    }
}
