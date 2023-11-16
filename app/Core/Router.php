<?php

namespace App\core;





class Router
{

    protected array $params = [];
    protected array $routes = [];

    public function __construct() 
    {
        $array = require '../Config/routes.php';  
        
        foreach ($array as $key => $value) {

            $this->add($key, $value);
               
        } 

        


    }

    public function add($key, $value)
    {
      
      $key = "#^{$key}$#";
      
      $this->routes[$key] = $value;
      
    }

    public function match () 
    {
       $url = ltrim($_SERVER['REQUEST_URI'], '/');  
       
      
        foreach ($this->routes as $key => $value) {
         
             
           if (preg_match($key, $url, $matches)) {

                 $this->params = $value;
                 
                return true;
          
              } 

          return false; 
       }
     
    
    }
      

    public function run() 
    {

      if($this->match()){
        
        $path ='app\Controllers\\'.ucfirst($this->params['controller']).'Controller.php';

        if (class_exists($path)) {

          $action = $this->params['action'].'Action';

          if (method_exists($path, $action)) {

            $controller = new $phat;
            $controller->$action();
            
          }else{

            echo 'chi gtnvel action@:'.$action;

          }
          
        }else{

          echo 'chi gtnvel controller:'.$path;

        }

      }else{

        echo "nman chanapar chka ";
      }
        
    }

}