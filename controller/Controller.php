<?php
//header('Access-Control-Allow-Origin: *');
ini_set('display_errors', 1	); // 0 No show errors, 1

// User Controller
require_once './UserController.php';

$accion = filter_input(INPUT_POST, "accion");
if (filter_input(INPUT_POST, "accion") == NULL) {
    $accion = filter_input(INPUT_GET, "accion");
}

switch ($accion){
    case 'accionName':
        //Here code
        echo "Aqui se llevara acabo las acciones";
        break;
    case 'login';
            try {
                $user = new UserController();
                $res = $user->login( filter_input(INPUT_POST, "user"), filter_input(INPUT_POST, "password") );
                echo $res;
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        break;
    default:
        break;
}