<?php

namespace Core;

class Controller
{

  public static function  up(array $param)
  {
    
    $controller = new $param[0];
    $method = $param[1];
    
      return $controller->$method();

  }


}
