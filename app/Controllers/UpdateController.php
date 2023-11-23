<?php

class UpdateController 
{

    public function __call($method, $array)
    {

      return $method;

    }

    public function update()  
    {

        echo 'iam update';

    }
    
}


