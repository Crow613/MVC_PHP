<?php

namespace Core;

class Request
{

   public array $server;

  public function __construct()
  {

    $this->server = $_SERVER;

  }

  public function uri() {

    return $this->server['REQUEST_URI'];

  }

  public function getMethod()
  {

    return $this->server['REQUEST_METHOD'];

  }

}
