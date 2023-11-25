<?php

namespace Core;

/**
 * @author CROW613 
 * @author MORYARTY
 *
 */

class Router 
{
    
  public REQUEST $request;
 
  public function __construct(REQUEST $request)
  {
    
    $this->request = $request;
   
  }

  public function prepareUri()
  {
  
    $method = $this->request->getMethod();
    $uri = $this->request->uri();
    $route = myGetMethod();
    $get = 'GET';
   // $post = 'POST';
    $flag = false;
     
    similar_text($method,$get,$methodSwitch);
    
    $cleanUri = trim($uri, '/');
  
     if($methodSwitch === 100.0){   
         
           foreach ($route as $location => $params){
                         
                    $controller = $params[0];
                    $action = $params[1];
                    $location = '#^'.$location.'$#';
        
              if(preg_match($location,$cleanUri, $switchError)){
          
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
        
     die('Error: NO Controller and Method');
        
   }
   
 }
   
}