<?php

namespace Mvc\controller;

use Mvc\controller\Controller;
use Mvc\model\Model;

class ControllerConf
{

  public function getMethods($routes,$path)
  {

    $flage = $routes[1] === 'product';


   if(!$flage){

     $controller = new Controller;

       if(file_exists($path.'.html')){

          return $controller->getMethod($path.'.html');

       }elseif(file_exists($path.'.php')){

         return $controller->getMethod($path.'.php');

      }else{

         include '../mvc/view/user/login.html';

      }

    }else{

         $file = dirname(__DIR__).'/view/user/login';

          if(file_exists($file.'.html')){
                 ;
            include   $file.'.html';

          }elseif(file_exists($file.'.php')){

            include $file.'.php';

          }else{

            die('Error: surch path');

          }

      exit;

    }



  }

  public function postMethods($routes)
  {

$model = new Model();
$method = $routes[2];
$product = $routes[1];

    if(method_exists($model, $method)){

       $file = dirname(__DIR__).'/view/product';
      $files = glob($file. '/*');
     return $model->$method($files[0]);

   }elseif (method_exists($model, $product )) {

    $file = dirname(__DIR__).'/view/product';
    $files = glob($file. '/*');


   return $model->$product($files[0]);

   }

  }

  public function deleteMethods()
  {


  }

}
