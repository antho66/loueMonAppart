<?php
class user {

   private $id;
   private $nom ;
   private $prenom; 
   private $username;
   private $password;
   private $confirmepassword;
   private $email;
   private $naissance;

   function getId() {
        return $this->id;
    }

   function getNom() {
       return $this->nom;
   }

   function getPrenom() {
       return $this->prenom;
   }

   function getUsername() {
       return $this->username;
   }

   function getPassword() {
       return $this->password;
   }

   function getConfirmepassword() {
       return $this->confirmepassword;
   }

   function getEmail() {
       return $this->email;
   }

   function getNaissance() {
       return $this->naissance;
   }

   function setId($id) {
        $this->id = $id;
    }

   function setNom($nom) {
       $this->nom = $nom;
   }

   function setPrenom($prenom) {
       $this->prenom = $prenom;
   }

   function setUsername($username) {
       $this->username = $username;
   }

   function setPassword($password) {
       $this->password = $password;
   }

   function setConfirmepassword($confirmepassword) {
       $this->confirmepassword = $confirmepassword;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setNaissance($naissance) {
       $this->naissance = $naissance;
   }


   public function __construct($donnees = array())
    {
      $this->hydrate($donnees);
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
      $bddManager->getuserRepository()->inserUser($this);
    }

    public function delete(BddManager $bddManager){
      $bddManager->getuserRepository()->deleteProduit($this);
    }


}




?>