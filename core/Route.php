<?php

namespace Core;

use Core\Router;

class Route 
{
    
    public static function get(String $path,array $param)
    {
        
        if (method_exists($param[0],$param[1])) {

            return new Router($path,$param);
        }
        
    }
    public function post() 
    {
        
    }
    public function update() 
    {
        
    }
    public function delete() 
    {
        
    }

}
