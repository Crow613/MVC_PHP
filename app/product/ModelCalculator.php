<?php

namespace App\product;

class ModelCalculator
{

    public function match()
    {

      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $options = $_POST['options'];
      $send = $_POST['send'];

       if(isset($send)){
        switch ($options) {

            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;

            default:
                return 'error';
                break;

        }

      echo $result;

      exit;

    }
 }
}
