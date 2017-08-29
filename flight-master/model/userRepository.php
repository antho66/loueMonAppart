<?php
  
  class  userRepository {


   private $connexion;


      public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function  getuserById($id){
                 $objet = $this->connexion->prepare('SELECT * FROM user WHERE id=:id');
                 $objet->execute(array(
                     'id'=>$id
                 ));
                 
                 $user =$objet->fetchAll(PDO::FETCH_ASSOC);

    } 

    public function getUserByEmail($email) {
        
        $object = $this->connexion->prepare('SELECT * FROM user WHERE email=:email');
        $object->execute(array(
            'email'=>$email
        ));
        $data = $object->fetch(PDO::FETCH_ASSOC);

        if($data){
            return new user($data);
        }
        else return false;
    }

     

      public function getAlluser(){

        $object = $this->connexion->prepare('SELECT *
      FROM user');
        $object->execute(array());
        $user = $object->fetchAll(PDO::FETCH_ASSOC);


        if(!empty($user)){
            $tableauUser=[];
            foreach($user as $tableauDonneesUser){
                $tableauUser[]=new user($tableauDonneesUser);
            }
            return $tableauUser;
        }
        return false;
    }
         

    public function saveUser (User $user){ 
        if(empty($user->getId()) == true){  
            $this->inserUser($user);
        }else{
            $this->updateUser($user);
        }
    }

        

    public function inserUser(User $user){
        $query = "INSERT INTO user SET username=:username,
        password=:password, email=:email,nom=:nom,prenom=:prenom,naissance=:naissance ";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'username'=> $user ->getusername(),
            'password'=> $user ->getpassword(),
            'email'=> $user ->getEmail(),
            'naissance'=> $user ->getNaissance(),
            'nom'=> $user ->getNom(),
            'prenom'=> $user ->getPrenom(),

            ));

        return $pdo->rowcount();

    }


    public function updateuser(user $user){
        $query = "UPDATE user SET username=:username,
        password=:password, email=:email,nom=:nom,prenom=:prenom,
        naissance=:naissance datecreate=:datecreate 
         WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $voiture ->getId(),
            'username'=> $user ->getusername(),
            'password'=> $user ->getpassword(),
            'email'=> $user ->getPrix(),
            'naissance'=> $user ->getNaissance(),
            'nom'=> $user ->getNom(),
            'prenom'=> $user ->getPrenom(),
            ));

            return $pdo->rowcount();

    }


    public function deleteuser(user $user){
        $query = "DELETE FROM user SET  username=:username,
        password=:password, email=:email,nom=:nom,prenom=:prenom,
        naissance=:naissance datecreate=:datecreate 
        couleur=:couleur  WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $user ->getId(),
            ));

            return $pdo->rowcount();

    }


    


     
}



?>