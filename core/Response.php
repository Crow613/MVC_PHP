<?php

namespace Core;

class Response
{

  public function __construct($path)
  {

    require ($path);
  // header($path);

  }

}
