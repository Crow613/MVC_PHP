<?php

namespace Core;

class Response
{

  public function __construct($path)
  {
           
    include($path);

  }

}
