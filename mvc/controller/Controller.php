<?php

namespace Mvc\controller;

use App\Controllers\Controllers;
use Core\Response;

class Controller
{

  public function  getMethod($path)
  {

    return new Response($path);

  }

  public function postMethod($path)
  {

      return new Response($path);

  }

}
