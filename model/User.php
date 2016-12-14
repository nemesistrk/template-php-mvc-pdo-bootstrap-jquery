<?php

class User {    
    private $iduser;
    private $user;
    private $password;
                   
    public function __construct(){
        
    }
    
    function getIduser() {
        return $this->iduser;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}
