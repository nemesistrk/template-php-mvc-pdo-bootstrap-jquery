<?php

require_once '../config/DBConnection.php';
require_once 'User.php';

class UserModel extends User {
    
    private $table;
    
    public function __construct() {
        $this->table = "user";
        parent::__construct($this->table);
    }
        
    public function login(){
        $pdo = new DBConnection();
        $db = $pdo->DBConnect();
        try{
            $db->beginTransaction();
            $sql = "SELECT * FROM  " . $this->table . " WHERE user =  ? AND password =  ?";
            $record = $db->prepare($sql);
            //echo $sql;
            //$record->execute(array($this->getUsuario(),$this->getContrasenia()));
            //$aParametros =  );
            //var_dump($aParametros);
            
            $record->execute( array( $this->getUser() , $this->getPassword() ) );
            $userExist = $record->rowCount();
            if ($userExist) {
                $dataList = $record->fetchAll(PDO::FETCH_ASSOC);
                $db->commit();
                $db = null;
                return $dataList;
            } else {
                $db->commit();
                $db = null;
                return $userExist;
            }            
        }catch (PDOException $exc){
            $db->rollback();
            $db = null;
            echo $exc->getMessage();
            return null;
        }   
    }    
}
