<?php
  
  class  locationsRepository {


   private $connexion;


      public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function  getLocationById($id){
                 $objet = $this->connexion->prepare('SELECT * FROM location WHERE id=:id');
                 $objet->execute(array(
                     'id'=>$id
                 ));
                 
                 $location =$objet->fetchAll(PDO::FETCH_ASSOC);

    } 

     

      public function getAllLocation(){

        $object = $this->connexion->prepare('SELECT *
      FROM location');
        $object->execute(array());
        $location = $object->fetchAll(PDO::FETCH_ASSOC);


        if(!empty($location)){
            $tableaulocation=[];
            foreach($location as $tableauDonneeslocation){
                $tableaulocation[]=new location($tableauDonneeslocation);
            }
            return $tableaulocation;
        }
        return false;
    }
         

    public function saveLocation (location $location){ 
        if(empty($location->getId()) == true){  
            
            $this->inserlocation($location);
        }else{
            $this->updatelocation($location);
        }
    }

        

    public function inserlocation(location $location){
        $query = " INSERT INTO location SET arriver=:arriver,
        depart=:depart voyageur=:voyageur";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'arriver'=> $location ->getarriver(),
            'depart'=> $location ->getdepart(),
            'voyageur'=> $location ->getvoyageur(),
            
            ));

        return $pdo->rowcount();

    }


    public function updateLocation(location $location){
        $query = "UPDATE location SET arriver=:arriver,
        depart=:depart voyageur=:voyageur
         WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $location ->getId(),
            'arriver'=> $location ->getarriver(),
            'depart'=> $location ->getdepart(),
            'voyageur'=> $location ->getvoyageur(),
            ));

            return $pdo->rowcount();

    }


    public function deleteLocation(location $location){
        $query = "DELETE FROM location SET  arriver=:arriver,
        depart=:depart voyageur=:voyageur  WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $location ->getId(),
            ));

            return $pdo->rowcount();

    }


    


     
}



?>