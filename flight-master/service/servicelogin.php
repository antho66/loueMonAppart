<?php
 class servicelogin extends service {


   function launchControls(){
      
        if(!filter_var($this->params['mail-or-username'], FILTER_VALIDATE_EMAIL)){
            $this->error['mail-or-username'] = 'le format de l\adresse mail est incorrect, ou il n\'est pas enregistre chez nous';
        }  

        if(empty($this->params['password'])){
            $this->error['password'] = 'Mot de passe incomplet';
        }

        if(empty($this->params['mail-or-username'])) {
            $this->error['username'] = 'Non d\'utilisateur  incorrect';
        }

        if(!empty($this->getError())){
            return;
        }

        if(!$this->checkPassword()){
            $this->error['check-password'] = "Password incorrect";
        }

        if( $this->checkUsernameExist() == false AND $this->checkEmailExist() == false ){
            $this->error['user_email'] = "Username ou email incorrect";
        }


   }

    public function checkPassword(){
        $username = $this->params['mail-or-username'];
        $password = $this->params['password'];
        $connexion = new PDO('mysql:host=localhost;dbname=tp_louerappartement;charset=UTF8','root','root');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $object = $connexion->prepare('SELECT id FROM user WHERE password=:password');
        $object->execute(array(
            'password'=>$password
        ));
        $user = $object->fetchAll(PDO::FETCH_ASSOC);
        if(empty($user)==false){
            return $user;
        }

        return false;
    }
    
    public function checkEmailExist() {
        $email = $this->params['mail-or-username'];
        $connexion = new PDO('mysql:host=localhost;dbname=tp_louerappartement;charset=UTF8','root','root');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $object = $connexion->prepare('SELECT id FROM user WHERE email=:email ');
        $object->execute(array(
            'email'=>$email
        ));
        $email = $object->fetchAll(PDO::FETCH_ASSOC);
        if(empty($email)==true){
            return $email;
        }
        return true;
    }
   

    public function checkUsernameExist() {
        $username = $this->params['mail-or-username'];
        $connexion = new PDO('mysql:host=localhost;dbname=tp_louerappartement;charset=UTF8','root','root');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $object = $connexion->prepare('SELECT id FROM user WHERE  username=:username');
        $object->execute(array(
            'username'=>$username
        ));
        $email = $object->fetchAll(PDO::FETCH_ASSOC);
        if(empty($email)==true){
            return $email;
        }
        return true;
    }

    public function login(BddManager $bddmanager){

        $user = $bddmanager->getUserRepository()->getUserByEmail($this->params["mail-or-username"]);

        if($user != false){
            $_SESSION["user"] = $user;
            return true;
        }
        else return false;

    }
       



}


?>