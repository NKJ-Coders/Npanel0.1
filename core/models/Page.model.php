<?php 
 class Page {


    public function __construct($action,$saction,$id){
        
        
            if(!isset($saction)){
                $page=$action;
                
                
            }else{
                if(!isset($id)){
                        //cas saction sans id
                    $page="S".$action;
                    
                }else{
                        //cas saction et id 
                $page="P".$action;
                
                }
                
                
            }
            $file_to_include="./core/views/".$page.".view.php";
              if(file_exists($file_to_include)){

              require_once($file_to_include);

              }else{
                  
                  require("./core/views/erreur404.view.php");
              }
      
      
            
          
        }
    }

