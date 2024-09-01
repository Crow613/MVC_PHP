<?php

namespace Core;

use Core\shablonisator\Methods;
use Exception;
use Core\Response;
use Core\shablonisator\TemplateEngine;


class View
{

  private $fileName;
  private $verebals;


  public function __construct($fileName, $verebals)
  {

    $this->fileName = $fileName;
    $this->verebals = $verebals;

    try {

      $templateEngine = new TemplateEngine(dirname(__DIR__) . '/resources/view/' . $this->fileName . '.blade.php');
      $respons = new Response();

      $respons->sheer($templateEngine->render($this->verebals));

    } catch (Exception $e) {

      echo 'Error: ' . $e->getMessage();

    }

  }
  public function getName()
  {
    return $this->fileName;
  }
  public function getVerebals()
  {
    return $this->verebals;
  }















}