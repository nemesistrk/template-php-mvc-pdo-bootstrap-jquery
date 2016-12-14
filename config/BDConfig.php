<?php
// Data Base Config file
if($_SERVER['SERVER_ADDR']=="8.8.8.8"){
    // Production config DB
    define('HOST','localhost');
    define('DB_USER', 'usuario_de_base_de_datos');
    define('DB_PASSWORD','password');
    define('DB_NAME','nombre_de_bd');
    define('DB_DRIVER','mysql');
    define('CHARSET','utf8');
}else{
    // Developer server
    define('HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD','adminlocal');
    define('DB_NAME','templatemvcpdo');
    define('DB_DRIVER','mysql');
    define('CHARSET','utf8');
}

