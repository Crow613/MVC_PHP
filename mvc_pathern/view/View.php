<?php

namespace Pathern\view;

use Core\Response;

class View
{

  public function admin($model, string $file)
  {

    $path = "../view/{$file}.php";
    $response = new Response;
    return $model->admin($response,$path);

  }

  public function login($model, string $file)
  {

    $path = "../view/{$file}.php";
    $response = new Response;
    return $model->login($response,$path);

  }

  public function registration($model, string $file)
  {

    $path = "../view/{$file}.php";
    $response = new Response;
    return $model->registration($response,$path);

  }

}
