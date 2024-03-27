<?php

namespace Core;

class Request
{

  public static function uri() {

    return $_SERVER['REQUEST_URI'];

  }

  public static function getMethod()
  {

    return $_SERVER['REQUEST_METHOD'];

  }

}
