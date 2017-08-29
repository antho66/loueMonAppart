<?php
  
  class  photoRepository {


   private $connexion;


      public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function  getPhotoById($id){

                 $objet = $this->connexion->prepare('SELECT * FROM photo WHERE id=:id');
                 $objet->execute(array(
                     'id'=>$id
                 ));
                 
                 $photo =$objet->fetchAll(PDO::FETCH_ASSOC);

    } 

  
     

      public function getAllPhoto(){

        $object = $this->connexion->prepare('SELECT *
      FROM photo');
        $object->execute(array());
        $photo = $object->fetchAll(PDO::FETCH_ASSOC);


        if(!empty($photo)){
            $tableauphoto=[];
            foreach($photo as $tableauDonneesphoto){
                $tableauphoto []=new photo($tableauDonneesphoto);
            }
            return $tableauphoto;
        }
        return false;
    }
         

    public function savePhoto (photo $photo){ 
        if(empty($photo->getId()) == true){  
            $this->inserPhoto($photo);
        }else{
            $this->updatePhoto($photo);
        }
    }

        

    public function inserPhoto(photo $photo){
        $query = "INSERT INTO photo SET nom=:nom,url=:url ";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'nom'=> $photo ->getname(),
            'url'=> $photo ->getUrl(),
            ));

        return $this->connexion->lastInsertId();

    }


    public function updatePhoto(photo $photo){
        $query = "UPDATE photo SET nom=:nom,url=:url 
         WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'nom'=> $photo ->getname(),
            'url'=> $photo ->getUrl(),
            ));

            return $pdo->rowcount();

    }


    public function deletePhoto(photo $photo){
        $query = "DELETE FROM photo SET  nom=:nom,url=:url  WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $photo ->getId(),
            ));

            return $pdo->rowcount();

    }


    


     
}



?>