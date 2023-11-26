<?php

namespace Core;

/**
 * @author CROW613 
 * @author MORYARTY
 *
 */

class Router 
{
    
  public Request $request;
 
  public function __construct(Request $request)
  {
    
    $this->request = $request;
   
  }

  public function prepareUri()
  {
     
    $methods = $this->request->getMethod();
    $uri = clearConfig($this->request->uri());
    $routes = myGetMethod();
   
    return controllers($routes['METHODS'],$methods,$uri);
      
 }
   
}