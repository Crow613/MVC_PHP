<?php

namespace Core;

use PhpParser\Builder\Method;

class Request extends Method
{
  private $get;
  private $file;
  private $method;

  public function __construct()
  {
    $this->get = $_SERVER;
    $this->file = $_FILES;
    $this->method = $_SERVER['REQUEST_METHOD'];
  }

  public function get()
  {
    return $this->get;
  }
  public function file()
  {
    return $this->file;
  }
  public function method()
  {
    return $this->method;
  }

}