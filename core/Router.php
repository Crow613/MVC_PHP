<?php

namespace Core;

use Pathern\controller\Controller;
use Conf\routes\Routes;

 /**
 * @author CROW613
 * @author MORYARTY
 */

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

   //dd($routes);

    foreach ($routes as $key => $value) {

      if($key === $this->request->getMethod()){

        return new Controller($value);

      }

    }

 }

}
