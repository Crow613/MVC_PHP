<?php

namespace Pathern\controller;

use Pathern\controller\Controller;
use Pathern\model\Model;

class ControllerConf
{

  public function getMethods($routes)
  {

    $uri = clearSlache($_SERVER['REQUEST_URI']);

      foreach ($routes as $route => $params){

        if(preg_match( reguliar($route), $uri)){

          $controller = str($params[0]);
          $method = $params[1];
          $pathClass = $controller.'Controller';
          $file = $params[0].'/'.$params[1];

          if(file_exists('../view/'.$file.'.php'))
          {

            $controller = new Controller();
            return $controller->getMethod($file,$method);

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
