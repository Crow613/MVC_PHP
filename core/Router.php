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

$routes = explode('/',trim($route));
 $routes[0]=$method;
 $file=dirname(__DIR__). '/mvc/view/user' ;

     if(file_exists($file.'/')){

$controllerConf = new ControllerConf();
 
                             switch ($routes[0]) {

                               case 'GET':

                                  return $controllerConf->getMethods($routes,$file.'/'.$routes[2]);

                                 break;

                               case 'POST':

                               return  $controllerConf->postMethods($routes);

                                 break;

                               case 'DELETE':

                                 return  $controllerConf->deleteMethods($routes,$file);

                                 break;

                               default:
                                 return error;
                                 break;
                             }

        }else {

           die('Error: no path');

        }

  }

}
