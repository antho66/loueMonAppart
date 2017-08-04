<?php
class user {


   private $email;
   private $password;
   private $username;

   public function __construct($donnees = array())
    {
      $this->hydrate($donnees);
    }


   function getEmail() {
       return $this->email;
   }

   function getPassword() {
       return $this->password;
   }

   function getUsername() {
       return $this->username;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setPassword($password) {
       $this->password = $password;
   }

   function setUsername($username) {
       $this->username = $username;
   }



    public function hydrate(array $donneesTableau){
        if(empty($donneesTableau) == false){
            foreach ($donneesTableau as $key => $value){
                $newString=$key;
                if(preg_match("#_#",$key)){
                    $word = explode("_",$key);
                    $newString = "";
                    foreach ($word as $w){
                        $newString.=ucfirst($w);
                    }
                }
                $method = "set".ucfirst($newString);
                if(method_exists($this,$method)){
                    $this->$method($value);
                }
            }
        }
    }




    public function save(BddManager $bddManager){
      //$this tout court sert à passer l'objet lui même
      $bddManager->getuserRepository()->saveProduit($this);
    }

    public function delete(BddManager $bddManager){
      $bddManager->getuserRepository()->deleteProduit($this);
    }


}




?>