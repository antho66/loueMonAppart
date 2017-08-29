<?php
require 'flight/Flight.php';
require 'autoloader.php';
// require_once 'model/registerUser.php';

// Flight::register('User', 'user');
// Flight::register('Bddmanager', 'Bddmanager');
session_start();
Flight::route('/', function(){
    $bddManager = new Bddmanager();
    $annonceRepositoy = $bddManager->getAnnonceRepository();
    $annonces = $annonceRepositoy->getAllAnnonce();

    flight::render('casa', array( "annonces" => $annonces ));
});

Flight::route('/login', function(){
    flight:: render ('login');
});

Flight::route('/louer', function(){
    flight::render('louer');
});

Flight::route('/annonce', function(){
    flight::render('annonce');
});

Flight::route('/casa', function(){
    $bddManager = new Bddmanager();
    $annonceRepositoy = $bddManager->getAnnonceRepository();
    $annonces = $annonceRepositoy->getAllAnnonce();

    flight::render('casa', array( "annonces" => $annonces ));
});

Flight::route('/profil', function(){
    $bddManager = new Bddmanager();
    $annonceRepositoy = $bddManager->getAnnonceRepository();
    $annonces = $annonceRepositoy->getAllAnnonce();



    flight::render('profil' , array( "annonces" => $annonces));
});

Flight::route('/inscription', function(){
    flight:: render ('inscription');
});

Flight::route('/deconnection', function(){
    session_destroy();
    flight ::redirect('casa');
});

Flight::route('POST /inscriptionService', function(){
    
    $serviceInscription = new serviceinscription();
    $serviceInscription->setParams($_POST);

    if( $serviceInscription->launchControls() === true){

        $serviceInscription->inscription(new Bddmanager());
        flight :: redirect('profil');

    }
    else if( $serviceInscription->getError()) {
       flight::render('inscription', array("error" => $serviceInscription->getError()));
    }


});


Flight::route('POST /servicelogin', function(){

    $servicelogin = new servicelogin();
    $servicelogin->setParams($_POST);
    $servicelogin->launchControls();

    if ( ( $servicelogin->checkEmailExist() OR  $servicelogin->checkUsernameExist()) AND $servicelogin->checkPassword() == true ){

            $servicelogin->login(new BddManager());
            flight :: redirect('profil');

    }

    else if ( $servicelogin->getError()){
        flight ::render ('login' ,array("error" => $servicelogin->getError()));
    }



});
Flight::route('POST /serviceannonce', function(){

    $bddManager = new BddManager();
    $serviceUploade = new serviceUploader();
    if($photo = $serviceUploade->upload()){
        $id = $photo->save($bddManager);
        $photo->setId($id);
    }
    else {
        print_r($serviceUploade->getError());
    }

    $serviceannonce = new serviceannonce();
    $serviceannonce->setParams($_POST);
    $serviceannonce->launchControls();

    if(empty($serviceannonce->getError())){
        $annonce = $serviceannonce->saveAnnonce();

        if($photo != false){
            $bddManager->getAnnonceRepository()->linkPhotoAnnonce($annonce, $photo);
        }
    }
     

    
    flight :: redirect('profil');


});

Flight::start();

?>
