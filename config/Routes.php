<?php  
    

      function myGetMethod()
      {
           
       return [
           
               'METHODS' =>[  
             
                            'GET' => [
               
                                      'test' =>['test','index' ], 
                                      'test/delete' =>['test','delete'],
                                      'test/update' =>['test','update'],
                                      'test/upgrade' =>['test','upgrade'],
                                      'test/data' =>['test','data']
                        
                                      ],
                   
                            'POST' => [
                       
                                       'home' =>['test','index' ],
                                       'home/delete' =>['test','delete'],
                                       'home/update' =>['test','update'],
                                       'home/upgrade' =>['test','upgrade'],
                                       'home/data' =>['test','data']
                       
                                       ]
                            
                            ]                     
             
                ];
         
      }
         
      
    
      
      
