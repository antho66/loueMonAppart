<?php

class Bddmanager
{

    private $connexion;
    private $userRepository;
    private $inscriptionRepository;
    private $annonceRepository;
    private $photoRepository;



    function getUserRepository() {
        return $this->userRepository;
    }


    function setUserRepository($userRepository) {
        $this->userRepository = $userRepository;
    }

    function getinscriptionRepository() {
        return $this->inscriptionRepository;
    }


    function setinscriptionRepository($inscriptionRepository) {
        $this->inscriptionRepository = $inscriptionRepository;
    }

    function getAnnonceRepository() {
        return $this->annonceRepository;
    }


    function setAnnonceRepository($annonceRepository) {
        $this->annonceRepository = $annonceRepository;
    }



    function getPhotoRepository() {
        return $this->PhotoRepository;
    }


    function setPhotoRepository($PhotoRepository) {
        $this->PhotoRepository = $PhotoRepository;
    }


    
    
        public function __construct()
    {
        $this->connexion = Connexion::getConnexion();
        $this->setuserRepository(new userRepository($this->connexion));
        $this->setinscriptionRepository(new inscriptionRepository($this->connexion));
        $this->setAnnonceRepository(new annonceRepository ($this->connexion));
        $this->setPhotoRepository(new PhotoRepository ($this->connexion));
    }

}






?>