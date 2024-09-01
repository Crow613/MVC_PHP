<?php

use Core\View;
use Core\Controller;

function view(string $phat, array $data): View
{
   return new View($phat, $data);
}
function route()
{

}
function redirect()
{
}
function file_chacker_route(string $uriRoute, array $param)
{


   if (method_exists($param[0], $param[1])) {


      if ($uriRoute === $_SERVER['REQUEST_URI']) {

         new Controller($param, function ($controller, $method) {

            return $controller->$method();
         });
      }
   }
}