<?php

namespace App\Controllers;

class TestController
{

    public function index()
    {

      //test

      require '..//view/default/default.php';
      require '..//view/calculator.php';

    }

    public function login()
    {

      echo 'hi methodDelete';

    }

    public function registracion()
    {

      echo 'hi Update';

    }

    public function admin()
    {

      echo 'hi Upgrade';

    }

}
