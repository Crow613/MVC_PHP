<?php

namespace Core;
use App\Http\Controller;

class Response
{

  public static function view($path)
  {

    return include("../resources/view/{$path}.php");

  }

}
