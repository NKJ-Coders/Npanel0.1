<?php
class Reference extends General{
    private $_ReferenceManager;
    private $_view;// la partie vu qui  affiche la formation 

   
    public function  __construct($action){
      $data=array();
        if(isset($action) ){

          // initialisation de la variable $data

          $data= array();


        if(isset($_GET['type'])){

          if(($_GET['type'] == 'Client') || ($_GET['type'] == 'Partenaire') ||  ($_GET['type'] == 'Chiffre') ){

                $type = ucfirst($_GET['type']); 

                // recuperation les enregistrement non supprimés  en fonction du type
                // $data = $this->AllReference($type);
          }

        }else{// si type n'existe pas

            //recupérer les enregistremnts non supprimés
             //$data = $this->AllReference($type);


        }// fin type

          if(isset($_GET['saction'])){
                
            $saction=$_GET['saction'];
          
            if (isset($_GET['id']) ){
                  // SS theme
                   $id = $_GET['id'];
            
                   // $data=$this->ReferenceOnly($id);
            }//FIn id
          }// fin existe saction        
   
            // affichage de la vue
               require_once($this->getView());
         
      }//Fin action

    }





}