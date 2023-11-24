<?php

namespace Core;

class Request
{

   public array $server;
   
   
  public function __construct(array $server)
  {
   
    $this->server = $server;
    
    
    
  }
  
  public function getMethod() {
      
      return $this->server['REQUEST_METHOD'];
      
  }
  
  public function uri() {
      
      return $this->server['REQUEST_URI'];
      
  }
  
}