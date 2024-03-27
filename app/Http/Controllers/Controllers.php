<?php

namespace App\http\Controllers;

class Controllers
{

  public function __construct(Object $controller,string $method)
  {
    return $controller->$method();
  }

}
