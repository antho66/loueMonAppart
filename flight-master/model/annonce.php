<?php
class annonce {


    private $id;
    private $titre;
    private $description ;
    private $id_createur; 
    private $prix;
    private $surface;
    private $photos = [];



     function __construct($datas = []){
        $this->hydrate($datas);
    }
   
    function getPrix() {
        return $this->prix;
    }

    function getSurface() {
        return $this->surface;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setSurface($surface) {
        $this->surface = $surface;
    }

    
    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getId_createur() {
        return $this->id_createur;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setId_createur($id_createur) {
        $this->id_createur = $id_createur;
    }

    function getPhotos(){
        return $this->photos;
    }

    function addPhoto(Photo $photo){
        $this->photos[] = $photo;
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
      return $bddManager->getAnnonceRepository()->inserAnnonce($this);
    }

    public function delete(BddManager $bddManager){
      $bddManager->getAnnonceRepository()->deleteAnnonce($this);
    }


}




?>