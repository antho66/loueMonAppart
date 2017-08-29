<?php
class serviceinscription extends service {


    function launchControls(){

        if(empty($this->params['nom'])){
            $this->error['nom'] = 'Nom  manquant';
        }
        
        if(empty($this->params['prenom'])){
            $this->error['prenom'] = 'prenom manquant';
        }

        if(!filter_var($this->params['email'], FILTER_VALIDATE_EMAIL)){
            $this->error['email'] = 'le format de l\adresse mail est incorrect';
          }  
        
         if(strlen($this->params['password']) >20){
            $this->error['password'] = ' mot de passe trop long';
        }

        else if (strlen($this->params['password']) <6){
            $this->error['password'] = ' mot de passe trop court';
        }

        if($this->params['password'] != $this->params['confirmepassword']){
            $this->error['confirmepassword'] = 'les password ne pas identique';
        }


       if(empty($this->params['username'])) {
            $this->error['username'] = 'Nom d\'utilisateur manquant';
        }

        if (!preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $this->params["naissance"]))
        {
         $error = true;
         $date = strtotime($this->params["naissance"]);
         $currentdate = time();
         $agetime = $currentdate - $date;
         $age = $agetime/3600/24/365.25;
         if($age <18){
          $this->error['naissance'] = 'Vous n\'avez pas l\'age requis pour vous inscrire sur ce site ';

         }

        
        }


        if(empty($this->error) == false) {
            return $this->error;
        }
        else
            return true;

    }

    function inscription($bddManager){
        var_dump($this->getParams());
        $user = new user();
        $user->setNom($this->params['nom']);
        $user->setUsername($this->params['username']);
        $user->setPassword($this->params['password']);
        $user->setEmail($this->params['email']);
        $user->setPrenom($this->params['prenom']);
        $user->setNaissance($this->params['naissance']);

        $repository = $bddManager->getUserRepository();
        $repository->saveUser($user);

    }

}

?>