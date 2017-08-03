<?php
 class servicelogin {

   private $params;
   private $error;
   private $appart;

   function getParams() {
       return $this->params;
   }

   function getError() {
       return $this->error;
   }

   function getAppart() {
       return $this->appart;
   }

   function setParams($params) {
       $this->params = $params;
   }

   function setError($error) {
       $this->error = $error;
   }

   function setAppart($appart) {
       $this->appart = $appart;
   }





}


?>