<?php
require_once '../config/properties.php';
require_once '../model/UserModel.php';

class UserController{
    
    public function __construct() {        
    }
    
    public function login($userName,$password){
        try {
            $user = new UserModel;
            $user->setUser($userName);
            $user->setPassword($password);
            $response = $user->login();
            return json_encode($response);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return 0;
        }
            
    }
    
}

