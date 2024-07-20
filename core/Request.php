<?php

namespace Core;

 class Request
{

  
  public static function get()
  {
    return [
      'atributes'=>[],
      'server'=>$_SERVER,
      'request'=>$_REQUEST,
      'model'=>[Models::class,Models::get()],
      'file'=>$_FILES,
      'session'=>$_SESSION=null,
      'cookie'=>$_COOKIE,
      'get'=>$_GET,
      'post'=>$_POST,
    ];
  }
  public static function post()
  {
    return  ['post'=>[$_POST],];
  }
 
 

 }
