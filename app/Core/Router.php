<?php

namespace App\Core;
use APP\Core\Request;

class Router 
{

  public  $uri;
  public  $confRout;
  public  $method;

  public function __construct($request)
  {
    
    $this->uri = $request->uri;
    $this->confRout = $request->confRout;
    $this->method = $request->method;
    
  }

  public function manipullUri()
  {

    $uri = trim($this->uri, '/');
     
    foreach ($this->confRout as $key => $value) {
          
      $arr[$key] = $value;
      $key ='#^'.$key.'$#';
       
      if(preg_match($key, $uri , $matches)){
             
        $matches = explode('/', $matches[0]);  
        $contrFil = dirname(__DIR__). '/Controllers/' . ucfirst(strtolower($matches[1])) .'Controller.php';
                   
        if (file_exists($contrFil)) {
                          
          include_once $contrFil;

          $matchesClass = ucfirst(strtolower($matches[1])) . 'Controller';
                 
          $controller = new $matchesClass();
               
          if (file_exists($controller, $method)) {

            $controller->update();

            dd($controller);
           
          }else {
        
            echo 'dont methods';

          }
                
        }else {
        
          echo 'dont controller';

        }
                   
      }else {
            
        exit('<br> servises');
               
      }

    }
  
    switch ($this->method)
    {

        case 'GET':

          $get($this->method);

          break;

        case 'POST':

          $post($this->method);

          break;
  
        default:

          return error;

        break;

    } 

  }

  public function get()
  {
   
  }

  public function post() 
  {
    
  }

}