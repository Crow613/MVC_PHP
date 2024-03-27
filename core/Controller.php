<?php

namespace Core;

use Core\View;
use Core\Response;
use App\Http\Controllers\Controllers;

class Controller
{

  public static function  get(array $param)
  {
       
      return new Controllers(new $param[0],$param[1]);

  }

  public static function post()
  {

      die('hi post method');

  }
  public static function update()
  {
    // code...
  }

  public static function delete()
  {
    // code...
  }
  public static function view($file)
  {

    return new Response($file);

  }

}
