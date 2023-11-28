<?php

namespace Config\controller;


class Controller extends ControllerConfig
{

  public function __construct(array $get)
  {

    return $this->getsMatch($get);

  }

  public function getsMatch($get)
  {

    foreach ($get as $key => $value){

        if($key === $_SERVER['REQUEST_METHOD']){

               
           return $this->executController($value);

        }

    }

  }

}
