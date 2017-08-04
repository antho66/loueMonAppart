<?php

class Bddanager
{

    private $connexion;
    private $userRepository;



    function getUserRepository() {
        return $this->userRepository;
    }


    function setUserRepository($userRepository) {
        $this->userRepository = $userRepository;
    }


    
    
        public function __construct()
    {
        $this->connexion = Connexion::getConnexion();
        $this->setuserRepository(new VoitureRepository($this->connexion));
      
    }

}






?>