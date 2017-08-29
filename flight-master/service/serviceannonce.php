<?php
 class serviceannonce extends service {


   function launchControls(){
      
      

        if(empty($this->params['description']) && count($this->params["description"]) >= 3000 ){
            $this->error['description'] = 'Caractére de la description trop long';
        }

        if(empty($this->params['titre']) && count($this->params["titre"]) >= 40  ) {
            $this->error['titre'] = 'titre trop long';
        }

       
        if(!empty($this->getError())){
            return false;
        }
        else return true;

      


   }

   function saveAnnonce(){
       $annonce = new Annonce();
       $annonce->setTitre( $this->params['titre'] );
       $annonce->setDescription( $this->params['description'] );
       $annonce->setId_createur( $_SESSION['user']->getId() );
       $annonce_id = $annonce->save(new Bddmanager());
       $annonce->setId($annonce_id);
       return $annonce;
   }




}


?>