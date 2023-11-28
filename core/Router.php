<?php

namespace Core;

use Config\controller\Controller;


/**
 * @author CROW613
 * @author MORYARTY
 *
 */

class Router
{

  public Request $request;

  public function __construct(Request $request,$getConfig)
  {

    $this->request = $request;
    $this->prepare($getConfig);

  }

  public function prepare($routes)
  {
        
    $controller = new Controller($routes);

 }

}
