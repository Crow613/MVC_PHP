<?php

namespace Core;

class Router 
{
    
  public REQUEST $request;
  public array $routeConfig;
 

  public function __construct(REQUEST $request,array $routeConfig)
  {
    
    $this->request = $request;
    $this->routeConfig = $routeConfig;
    
   
  }

  public function prepareUri()
  {
      
    $uri = $this->request->uri();
    $method = $this->request->getMethod();
    
    $cleanUri = ltrim($uri, '/');
      
    foreach ($this->routeConfig[$method] as $key => $value) {
        
        
      $key ='#^'.$key.'$#';
    
      if(preg_match($key, $cleanUri)){
          
          
        $controller = $value['Controller'];
        $action = $value['Action']; 
        $fillePath = ucfirst(strtolower($controller)) .'Controller';
       
                  
        if (file_exists(dirname(__DIR__).'/app/Controllers/'.$fillePath.'.php')) {
                      
           $class = 'App\Controllers\\' . $fillePath;
             
            $controller = new $class;
            
          if (method_exists($controller,$action)) {
            
            $controller->$action();
            
            exit;
           
          }else {
              
              die('404');
          }
          
        }else {
            
            die('405');
        }
        
      }else {
          
          // preg match
          
          die('405');
          
      }
      
   
     
    }
  
  }  
  
}
