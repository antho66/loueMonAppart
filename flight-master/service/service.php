<?php 
class Service {

    protected $params;
    protected $error;
 
 
    function getParams() {
        return $this->params;
    }
 
    function getError() {
        return $this->error;
    }
 
 
    function setParams($params) {
        $this->params = $params;
    }
 
    function setError($error) {
        $this->error = $error;
    }

}