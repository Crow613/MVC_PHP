<?php

namespace App\Core;
use App\Core\Router;

class Request
{

   public  $uri;
   public  $method;
   public  $confRout;
   
  public function __construct($uri,$method,$confRout)
  {
   
    $this->uri = $uri;
    $this->method = $method;
    $this->confRout = $confRout;
    
  }

}