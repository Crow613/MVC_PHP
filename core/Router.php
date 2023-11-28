<?php

namespace Core;

use Config\controller\Controller;

/**
 * @author CROW613
 * @author MORYARTY
 *
 */

class Router extends Request
{

  public Request $request;

  public function __construct(Request $request, array $routes)
  {

     $this->request = $request;
     $this->prepare($routes);

  }

  public function prepare(array $routes)
  {

    foreach ($routes as $key => $value) {

      if($key === $this->request->getMethod()){

              return new Controller($value);

      }

    }

 }

}
