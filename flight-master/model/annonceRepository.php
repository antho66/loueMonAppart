<?php
  
  class  annonceRepository {


   private $connexion;


      public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function  getuserById($id){

                 $objet = $this->connexion->prepare('SELECT * FROM annonce WHERE id=:id');
                 $objet->execute(array(
                     'id'=>$id
                 ));
                 
                 $annonce =$objet->fetchAll(PDO::FETCH_ASSOC);

    } 

  
     

      public function getAllAnnonce(){

        $object = $this->connexion->prepare('SELECT * FROM annonce');
        $object->execute(array());
        $annonce = $object->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($annonce)){
            $tableauannonce=[];
            foreach($annonce as $tableauDonneesannonce){
                $annonce = new annonce($tableauDonneesannonce);

                if($photo = $this->getFirstPhoto($annonce)){
                    $annonce->addPhoto($photo);
                }
                
                $tableauannonce[]= $annonce;
            }
            return $tableauannonce;
        }
        return false;
    }
         

    public function saveAnnonce (annonce $annonce){ 
        if(empty($annonce->getId()) == true){  
            $this->inserAnnonce($annonce);
        }else{
            $this->updateAnnonce($annonce);
        }
    }

        

    public function inserAnnonce(annonce $annonce){
        $query = "INSERT INTO annonce SET description=:description,
        titre=:titre, id_createur=:id_createur,prix=:prix,surface=:surface, datecreate=NOW()";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'description'=> $annonce ->getdescription(),
            'titre'=> $annonce ->gettitre(),
            'id_createur'=> $annonce ->getid_createur(),
            'prix'=> $annonce ->getPrix(),
            'surface'=> $annonce ->getSurface()
            ));

        return $this->connexion->lastInsertId();

    }


    public function updateAnnonce(annonce $annonce){
        $query = "UPDATE annonce SET description=:description,
        titre=:titre, id_createur=:id_createur,prix=:prix,surface=:surface
         WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'description'=> $annonce ->getdescription(),
            'titre'=> $annonce ->gettitre(),
            'id_createur'=> $annonce ->getid_createur(),
            'prix'=> $annonce ->getPrix(),
            'surface'=> $annonce ->getSurface()
            ));

            return $pdo->rowcount();

    }


    public function deleteAnnonce(annonce $annonce){
        $query = "DELETE FROM annonce SET  description=:description,
        titre=:titre, id_createur=:id_createur,prix=:prix,surface=:surface   WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $user ->getId(),
            ));

            return $pdo->rowcount();

    }

    public function linkPhotoAnnonce(Annonce $annonce, Photo $photo){

        $query = "INSERT INTO anonce_photo SET id_annonce=:id_annonce, id_photo=:id_photo";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id_annonce'=> $annonce ->getId(),
            'id_photo'=> $photo ->getId()
            
            ));

            return $pdo->rowcount();

    }

    public function getFirstPhoto(Annonce $annonce){
     
        $query ="SELECT  photo.* FROM photo
        LEFT JOIN anonce_photo
        ON id_annonce=:id_annonce
        WHERE photo.id = anonce_photo.id_photo
        LIMIT 1";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id_annonce'=> $annonce ->getId()
        ));

            $photodata = $pdo->fetch(PDO::FETCH_ASSOC);
            if(empty($photodata)){
                return false;
            }
            else return new Photo($photodata);

    }


    


     
}



?>