<?php
  
  class  inscriptionRepository {


   private $connexion;


      public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function  getinscriptionById($id){
                 $objet = $this->connexion->prepare('SELECT * FROM inscription WHERE id=:id');
                 $objet->execute(array(
                     'id'=>$id
                 ));
                 
                 $inscription =$objet->fetchAll(PDO::FETCH_ASSOC);

    } 

     

      public function getAllinscription(){

        $object = $this->connexion->prepare('SELECT *
      FROM inscription');
        $object->execute(array());
        $inscription = $object->fetchAll(PDO::FETCH_ASSOC);


        if(!empty($inscription)){
            $tableauinscription=[];
            foreach($inscription as $tableauDonneesinscription){
                $tableauinscription[]=new inscription($tableauDonneesinscription);
            }
            return $tableauinscription;
        }
        return false;
    }
         

    public function saveinscription (inscription $inscription){ 
        if(empty($inscription->getId()) == true){  
            
            $this->inserinscription($inscription);
        }else{
            $this->updateinscription($inscription);
        }
    }

        

    public function inserinscription(inscription $inscription){
        $query = " INSERT INTO user SET username=:username,
        mdp=:mdp email=:email,nom=:nom,prenom=:prenom;naissance=:naissance";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'username'=> $inscription ->getusername(),
            'mdp'=> $inscription ->getmdp(),
            'nom'=> $inscription ->getnom(),
            'prenom'=> $inscription ->getprenom(),
            'naissance'=> $inscription ->getnaissance(),
            'email'=> $inscription ->getEmail(),
            ));

        return $pdo->rowcount();

    }


    public function updateinscription(inscription $inscription){
        $query = "UPDATE inscription SET username=:username,
        mdp=:mdp email=:email,nom=:nom,prenom=:prenom;naissance=:naissance
         WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $voiture ->getId(),
            'username'=> $inscription ->getusername(),
            'mdp'=> $inscription ->getmdp(),
            'nom'=> $inscription ->getnom(),
            'prenom'=> $inscription ->getprenom(),
            'naissance'=> $inscription ->getnaissance(),
            'email'=> $inscription ->getPrix(),
            ));

            return $pdo->rowcount();

    }


    public function deleteinscription(inscription $inscription){
        $query = "DELETE FROM inscription SET  username=:username,
        mdp=:mdp email=:email,nom=:nom,prenom=:prenom;naissance=:naissance  WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $inscription ->getId(),
            ));

            return $pdo->rowcount();

    }


    


     
}



?>