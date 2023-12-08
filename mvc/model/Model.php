<?php

namespace Mvc\model;

use Mvc\model\db\Connection;
use Mvc\controller\Controller;
use Core\Response;
use PDO;

class Model
{

   public function product($path)
   {

     $controller = new Controller;
     $controller->postMethod($path);

   }

    public function login($path)
    {

       $connect = new Connection;
       $email = $_POST['email'];
       $password = $_POST['password'];

       if($email == ''){

            if ($password == '') {

            }

       }else{

         $query = "SELECT  `email`,`password` FROM `users`";
         $stmt = $connect->pdo->query($query);
         $exses = $stmt->fetch(PDO::FETCH_ASSOC);

         if($email === $exses['email']){

          $pass = md5($password) === 'dafsdfasdgeqwgredf';

              if ($password === $exses['password']) {


                $controller = new Controller;
                $controller->postMethod($path);

              }else{

                  die('Error: password complet');
              }

         }else{

           die('Error: email complet');

         }

    }

     $connect->pdo = die;

    }

    public function registration($path)
    {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $pwd = $_POST['repPwd'];

      if($password === $pwd)
      {

         if(!$name == ''){

           if (!$email == '') {

               if (!$password == '') {

                 $connect = new Connection;
                 $exses = $connect->pdo->query("SELECT  `email`,`password` FROM `users`")->fetch(PDO::FETCH_ASSOC);
                 $pass = md5($password) === 'dafsdfasdgeqwgredf';


                    if($email == $exses['email']){

                       die('0');

                      }
                       if ($pass == $exses['password']) {

                     die('1');



                     }else{



                              $query = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$pass')";
                              $stmt = $connect->pdo->prepare($query);
                              $stmt->execute();
                              $controller = new Controller;
                              return  $controller->postMethod($path);


                     }
                   }
                 }
               }
             }

              $conection->pdo = die;


  }

}
