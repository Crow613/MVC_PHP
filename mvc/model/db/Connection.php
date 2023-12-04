<?php

namespace Mvc\model\db;

use PDO;



 class Connection
 {

public $pdo;


  public function __construct()
 {
   $host = 'db';
   $dbname = 'test';
   $user = 'root';
   $pass = 'root';


   try {

    $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);



} catch (PDOException $e) {

     die($e);

}

 }

 }
