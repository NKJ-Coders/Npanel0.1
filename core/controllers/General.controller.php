<?php 
ABSTRACT class General {
    private $_view;// la partie vu qui  affiche la formation 
    private $_BanniereManager;
    private $_ContactManager;
    private $_CategorieManager;
    private $_ProduitManager;
    private $_MarqueManager;
    private $_ConditionnementManager;
    private $_PrestationManager;
    private $_CommandeManager;
    private $_CustumerManager;
    private $_PanierManager;
    private $_EntrepriseManager;
    private $_AgenceManager;
    private $_DevisManager;
   




    protected function setView(){
    
               $this->_view="core/views/mycms.view.php";            
    }

    protected function getView(){

             $this->setView();
        return $this->_view;
    }

    protected function AllData($action){
     $table=strtolower($action);
     $action=ucfirst(strtolower($table));
     $obj= $action."s";
     $modelManager="_".$action."Manager";
     $classeManager=$action."Manager";
     $this->$modelManager = new $classeManager();
     return $this->$modelManager->getAllData($table,$obj);
    }

    protected function Add($action,$param){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->AddData($table,$param);
    } 

    protected function getAllByParam($action,$param){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $obj= $action."s";
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->getAllDataByParam($table,$param,$obj);
    }

    protected function getColsByCol($action,$cols,$col,$val){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->getOneColbyOneCol($table,$cols,$col,$val);
    }
    



     protected function updateParamById($action,$param,$id){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->updateDataById($table,$id,$param);
     }

     protected function GetMaxId($action){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->getMaxDataId($table);
     }

     

    protected function ChangerStatut($action,$saction,$id){
         $table=strtolower($action);
         $action=ucfirst(strtolower($table));
         $obj= $action."s";
         $modelManager="_".$action."Manager";
         $classeManager=$action."Manager";
         $online=1;
         if($saction=="PutOnline")$online="1";
         if($saction=="PutOffline")$online="0";
         if($saction=="Del") $online="-1";
         $this->$modelManager = new $classeManager();
         return $this->$modelManager->ChangeStatut($table,$online,$id);
    }
    protected function getMsg($resultat){

        if(!empty($resultat)){
            $msg='<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong><i class="fa fa-check" aria-hidden="true"></i> </strong> Créé avec succès!
                </div>';

        }else{
            $msg='<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong><i class="fa fa-stop-circle" aria-hidden="true"></i> </strong> Echec de création!
                </div>';
        }
     return $msg;
    }




 

}