<?php

namespace Core;





class Controller
{
public function __construct($param,callable $callback) {
   $callback(new $param[0],$param[1]);
}


}
