<?php

namespace Config\controller;

class  ControllerConfig
{

  public $controller;
  public $action;

public function executController($routes)
{

   $uri = clearSlache($_SERVER['REQUEST_URI']);

       foreach ($routes as $route => $params){

            $controller = $params[0];
            $action = $params[0];

             if(preg_match( reguliar($route), $uri)){

                  $path = str($controller) . 'Controller';


                 $this->prepareController($controller, $action, $path);

            }
            
   }

     die('Error: No Controller and Method');

}

public function prepareController($Controller, $method, $path)
{

  if (file_exists('..//app/Controllers/TestController.php')) {

    $class =  'app/Controllers/TestController';
          dd($class);
      $this->controllerClass = new $class;

      if (method_exists($this->controllerClass,$method)) {

          $this->controllerClass()->$method;

      }else {

          die('Error: No Method in Controller');

      }

 }else {

    die('Error: No Controller');

  }

 }

}
