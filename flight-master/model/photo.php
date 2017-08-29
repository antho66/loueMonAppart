<?php
class photo {

   private $id;
   private $url;
   private $name;

   function getId() {
       return $this->id;
   }

   function setId($id) {
       $this->id = $id;
   }
   function getUrl() {
       return $this->url;
   }

   function getName() {
       return $this->name;
   }

   function setUrl($url) {
       $this->url = $url;
   }

   function setName($name) {
       $this->name = $name;
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
      return $bddManager->getPhotoRepository()->inserPhoto($this);
    }

    public function delete(BddManager $bddManager){
      $bddManager->getPhotoRepository()->deletePhoto($this);
    }


}




?>