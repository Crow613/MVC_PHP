<?php

namespace Core;

use Mvc\controller\ControllerConf;

class Router
{

  public Request $request;

  public function __construct(Request $request)
  {

    $this->request = $request;
    $this->prepare();

  }

  public function prepare()
  {




    $route = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    $getMethod=[
      "GET"=>['/product/calculator'],
      $method=>[$route]
               ];

 $routes = $getMethod[$method][0];

                  $controllerConf = new ControllerConf();
                             switch ($method) {

                               case 'GET':

                               return $controllerConf->getMethods($routes);

                                 break;

                               case 'POST':

                               return  $controllerConf->postMethods($routes);

                                 break;

                               case 'DELETE':

                                 return  $controllerConf->deleteMethods($routes);

                                 break;

                               default:
                                 return error;
                                 break;
                             }


  }

}
