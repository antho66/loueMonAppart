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
         

    public function saveUser (User $User){ 
        if(empty($User->getId()) == true){  
            
            $this->inserUser($user);
        }else{
            $this->updateUser($user);
        }
    }

        

    public function inserUser(User $User){
        $query = " INSERT INTO user SET username=:username,
        password=:password  email=:email ";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'username'=> $user ->getusername(),
            'password'=> $user ->getpassword(),
            'email'=> $user ->getPrix(),

            ));

        return $pdo->rowcount();

    }


    public function updateuser(user $user){
        $query = "UPDATE user SET username=:username,
        password=:password  email=:email datecreate=:datecreate 
         WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $voiture ->getId(),
            'marque'=> $voiture->getMarque(),
            'username'=> $user ->getusername(),
            'password'=> $user ->getpassword(),
            'email'=> $user ->getPrix(),
            ));

            return $pdo->rowcount();

    }


    public function deleteuser(user $user){
        $query = "DELETE FROM user SET username=:username,
        password=:password  email=:email datecreate=:datecreate 
        couleur=:couleur  WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo -> execute(array(
            'id'=> $user ->getId(),
            ));

            return $pdo->rowcount();

    }


    


     
}



?>