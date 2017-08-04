<?php
 class servicelogin {

   private $params;
   private $error;
   private $appart;



   function getParams() {
       return $this->params;
   }

   function getError() {
       return $this->error;
   }

   function getAppart() {
       return $this->appart;
   }

   function setParams($params) {
       $this->params = $params;
   }

   function setError($error) {
       $this->error = $error;
   }

   function setAppart($appart) {
       $this->appart = $appart;
   }


    public function checkUsernamePassword(){
        $username = $this->params['username'];
        $password = $this->params['password'];
        $connexion = new PDO('mysql:host=localhost;dbname=tp_louerappartement;charset=UTF8','root','root');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $object = $connexion->prepare('SELECT id,username FROM users WHERE username=:username AND password=:password');
        $object->execute(array(
            'password'=>$password,
            'username'=>$username
        ));
        $user = $object->fetchAll(PDO::FETCH_ASSOC);
        if(empty($user)==false){
            return $user;
        }
        return false;
    }
    public function checkEmailExist() {
        $email = $this->params['email'];
        $connexion = new PDO('mysql:host=localhost;dbname=tp_louerappartement;charset=UTF8','root','');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $object = $connexion->prepare('SELECT email FROM users WHERE email=:email');
        $object->execute(array(
            'email'=>$email
        ));
        $email = $object->fetchAll(PDO::FETCH_ASSOC);
        if(empty($email)==true){
            return $email;
        }
        return true;
    }
   




}


?>