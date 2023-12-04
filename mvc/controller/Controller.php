<?php

namespace Mvc\controller;

use App\Controllers\Controllers;
use Core\Response;

class Controller
{

  public function  getMethod($path)
  {
    //dd($path);

    return new Response($path);

  }

  public function postMethod($path)
  {

      return new Response($path);

  }

}










  // $view = new View();
   //$model = new Model();

   //if(method_exists($view,$method))
   //{

     //return $view->$method($model,$file);

     //die;

   //}
