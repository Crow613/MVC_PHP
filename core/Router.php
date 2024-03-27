<?php

namespace Core;

use Core\Request;
use Core\Controller;


class Router
{
  
    public function __construct(String $uriRoute, Array $param)
    {
      
      if($uriRoute === $_SERVER['REQUEST_URI'])
      {
        $methods = Request::getMethod();
       return Controller::$methods($param);
      }
  
    }
  
}