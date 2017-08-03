<?php
require 'flight/Flight.php';

Flight::route('/', function(){
    flight:: render ('login');
});

// Flight::route('/', function(){
//     flight:: render ('');
// });

Flight::start();
?>
