<?php

namespace Mvc\controller;

use Mvc\controller\Controller;
use Mvc\model\Model;

class ControllerConf
{
  public $path;

  public function getMethods($routes)
  {

    $uri = clearSlache($_SERVER['REQUEST_URI']);

      foreach ($routes as $route => $params){

        if(preg_match( reguliar($route), $uri)){

          $controller = str($params[0]);
          $method = $params[1];
          $pathClass = $controller.'Controller';
          $file = $params[0].'/'.$params[1];
          $this->path = dirname(__DIR__)."/view/{$file}.php";

          if(file_exists($this->path))
          {


            $controller = new Controller();
            return $controller->getMethod($this->path);

          }

        }

    }

  }

  public function postMethods($routes)
  {
   foreach ($routes as $route => $value)
    {

     if($route === clearSlache($_SERVER['REQUEST_URI']))
     {
         $method = $value[1];
         $model = new Model();
         if(method_exists($model,$value[1])){

          return $model->$method();

         }

     }
   }

   die('error');

  }

  public function deleteMethods()
  {

  }

}
