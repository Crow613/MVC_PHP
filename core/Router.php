<?php

namespace Core;

use Pathern\controller\ControllerConf;
use Conf\routes\Routes;

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

    $routesConf = new Routes;
    $routes = $routesConf->getConfig();

        foreach ($routes as $key => $value) {

          if($key === $this->request->getMethod()){

            $controller = new ControllerConf();

                switch ($key) {
                  case 'GET':

                  return $controller->getMethods($value);

                    break;

                  case 'POST':

                  return  $controller->postMethods($value);

                    break;
                    
                  case 'DELETE':

                    return  $controller->deleteMethods($value);

                    break;

                  default:
                    return error;
                    break;
                }

        }

     }

  }

}
