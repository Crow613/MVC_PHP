<?php

namespace App\product;

class ModelCalculator
{

    public function match($num1,$num2,$options,$send,$rez)
    {
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
        $rez=$result;
            //dd($result);
        echo $rez;

    }
 }
}
