<?php

namespace App;

class Model
{

    protected string $num1;
    protected string $num2;
    protected string $options;

    public function __construct()
    {

        if(isset($_POST['send'])){

               $num1 = $_POST['num1'];
               $num2 = $_POST['num2'];

               $options = $_POST['options'];

               $this->num1 = $num1;
               $this->num2 = $num2;
               $this->options = $options;

        }else{

            echo "place commplit ";

        }

    }

    public function match()
    {

        switch ($this->options) {

            case '+':
                $result = $this->num1 + $this->num2;
                break;
            case '-':
                $result = $this->num1 - $this->num2;
                break;
            case '*':
                $result = $this->num1 * $this->num2;
                break;
            case '/':
                $result = $this->num1 / $this->num2;
                break;

            default:
                return 'error';
                break;

        }

        return $result;

    }

}
