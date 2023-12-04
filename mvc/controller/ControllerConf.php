<?php

namespace Mvc\controller;

use Mvc\controller\Controller;
use Mvc\model\Model;

class ControllerConf
{

  public function getMethods($routes)
  {

     $route = explode( '/', trim($routes, '/'));
     $flag = $route[0] === 'product';
     $routeR ='#^'.$route[1].'$#';

      if($flag === false){

             $path = dirname(__DIR__).'/view/'.$route[0].'/'.$route[1].'.php';


        if(file_exists($path)){

             if($routeR){

               $controller = new Controller();

               return $controller->getMethod($path);

            }

        }else{

          die('erorr:404');

          }
     }else{

       die('sa pti tani login');
     }
  }

  public function postMethods($routes)
  {
         $route = explode( '/', trim($routes, '/'));

         $routeR = '#^'.$route[1].'$#';

        if($routeR){

        $model = new Model();
          $method = $route[1];
         if(method_exists($model, $method)){

          return $model->$method();

        }

     }else{

        die('error');

     }

  }

  public function deleteMethods()
  {


  }

}
