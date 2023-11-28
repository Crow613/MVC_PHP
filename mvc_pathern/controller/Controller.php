<?php

namespace Pathern\controller;

class Controller
{

    public $controllerClass;
    protected string $controller;
    protected string $action;

  public function __construct(array $routes)
  {

    $this->executController($routes);

  }

  protected function executController(array $routes)
  {

    $uri = clearSlache($_SERVER['REQUEST_URI']);

      foreach ($routes as $route => $params){

        if(preg_match( reguliar($route), $uri)){

          $this->controller = $params[0];
          $this->action = $params[1];

          $path = str($this->controller) . 'Controller';
          return $this->prepareController($path);

        }

    }

  }

  protected function prepareController($path)
  {

   $method = $this->action;

  if (file_exists('../app/Controllers/'.$path.'.php')) {

    $class = App\controllers::$path;

    $contClass = new $class;
    
    if (method_exists($controllerClass,$method)) {

      return $controllerClass->$method();

    }else {

      die('Error: No Method in Controller');

    }

  }else {

    die('Error: No Controller');

  }

    die('Error: No Controller and Method');

  }

}
