<?php 

function controllers(array $array,$method,$uri) {
    
    foreach ($array as $key => $value){
        
        if(preg_match('#^'.$key.'$#', $method)){
   
        $routes = $value;
        
       }
       
    }
    
    if(!$routes){
        
        die(Error);
        
    }
 
        foreach ($routes as $route => $params){
            
            $controller = $params[0];
            $action = $params[1];
            
            if(preg_match('#^'.$route.'$#',$uri)){
                
                $path = ucfirst(strtolower($controller)) .'Controller';
                
                if (file_exists(dirname(__DIR__).'/app/Controllers/'.$path.'.php')) {
                    
                    $class = 'App\Controllers\\' . $path;
                    $contClass = new $class;
                    
                    if (method_exists($contClass,$action)) {
                        
                        $contClass->$action();
                     
                        exit;
                        
                    }else {
                        
                        die('Error: No Method in Controller');
                        
                    }
                    
                }else {
                    
                    die('Error: No Controller');
                    
                }
                
            }
            
        }
        
        die('Error: No Controller and Method');
        
    }

function clearConfig($clear) {
    
    return trim($clear, '/');
    
}
