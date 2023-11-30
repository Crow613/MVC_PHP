<?php

namespace Pathern\controller;

use App\Controllers\Controllers;
use Core\Response;

class Controller
{

  public function  getMethod($file,$method)
  {

    $response = new Response();
    $path = "../view/{$file}.php";
    return $response->$method($path);

  }

  public function postMethod()
  {
    echo 'post controller';
  }

}










  // $view = new View();
   //$model = new Model();

   //if(method_exists($view,$method))
   //{

     //return $view->$method($model,$file);

     //die;

   //}
