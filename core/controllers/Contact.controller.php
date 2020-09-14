<?php
class Contact extends General {
   
    

   
    public function  __construct($action){ 
        if(isset($action) ){

          // lecture des données envoyées par url
          if(isset($_GET['saction'])) $saction=$_GET['saction'];
          if(isset($_GET['id'])) $id = $_GET['id'];
          if(isset($_GET['ssaction']))$ssaction=$_GET['ssaction'];

          if(isset($saction)){
            if($saction=="add"){
              //add
               //définition de param
                $param=$this->getParam();
              // eviter les doublons sur le nom de photo
                if(empty($this->getAllByParam($action,$param))){
                 $resultat=$this->Add($action,$param); 
               }else{
                $resultat=0;
               }
              
                $msg=$this->getMsg($resultat);

            }//Fin add

            //Changement de statut
          if( isset($id) && ($saction=="PutOffline" or $saction=="PutOnline")) $this->ChangerStatut($action,$saction,$id);

          }//Fin $saction

        
          //Chargement des données par defaut
          if(!isset($data)){
            $data=$this->AllData($action);
          }
          // affichage de la vue
          require_once($this->getView());
         
      }//Fin action

    }

private function getParam(){
    extract($_POST);
    $valeur=str_replace("'", "\'", $valeur);          
    $param[0]['col']='type';
    $param[0]['val']=$type;
    $param[1]['col']='valeur';
    $param[1]['val']=$valeur;
  
    return $param;
}


}