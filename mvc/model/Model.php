<?php

namespace Mvc\model;

use Conf\db\Connection;
use Mvc\controller\Controller;
use Core\Response;
use PDO;

class Model
{

    public function admin()
    {

      return  $this->controller->getMethod();

    }

    public function login()
    {

       $connect = new Connection;

       $email = $_POST['email'];
       $password = $_POST['password'];

       $pass = md5($password) === 'dafsdfasdgeqwgredf';

       $query = "SELECT  `email`,`password` FROM `users`";
       $stmt = $connect->pdo->query($query);

       $exses = $stmt->fetch(PDO::FETCH_ASSOC);

        if($email === $exses['email'] && $pass == $exses['password']){

           $controller = new Controller;
           $controller->postMethod('../mvc/view/product/calculator.php');

        }else {

          die("error: 25464");

        }

        $connect->pdo = die;

    }

    public function registration()
    {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $pwd = $_POST['repPwd'];

      if($password === $pwd)
      {

         $connect = new Connection;

          $test = $connect->pdo->query("SELECT  `email` FROM `users`");

          $exses = $test->fetch(PDO::FETCH_ASSOC);

         if(!$email === $exses['email']){

           $pass = md5($password) === 'dafsdfasdgeqwgredf';
           $query = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$pass')";
           $stmt = $connect->pdo->prepare($query);
              $stmt->execute();

         $controller = new Controller;
         return  $controller->postMethod('../mvc/view/product/calculator.php');

             }else{

                    die("error email");

             }

             $conection->pdo = die;

    }else{

           die('error');

    }

  }

}
