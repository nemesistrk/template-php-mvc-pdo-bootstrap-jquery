<?php
require_once 'BDConfig.php'; //DB Config File 

class DBConnection {
    private $driver;
    private $host;
    private $user;
    private $pass;
    private $database;
    private $charset;
    
    public function __construct() {
        //Vacia variabes constantes
        $this->driver   = DB_DRIVER;
        $this->host     = HOST;
        $this->user     = DB_USER;
        $this->pass     = DB_PASSWORD;
        $this->database = DB_NAME;
        $this->charset  = CHARSET;
    }    
    
    function DBConnect() {
        try {
            $db = new PDO($this->driver.":host=".$this->host.";dbname=".$this->database.";charset=".$this->charset, $this->user, $this->pass);
            $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//          $db->setAttribute(PDO::ATTR_PERSISTENT, true);
            return ($db);            
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
            print "Error: ".$exc->getMessage();
        }
            
    }
    
}
