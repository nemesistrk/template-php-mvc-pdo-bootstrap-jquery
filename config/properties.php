<?php
ini_set('display_errors', 1	); // 0 No show errors, 1
// Config application

/* Path local and remote */

if($_SERVER['SERVER_ADDR']=="50.116.109.167"){	
	define('SITE_URL','http://8.8.8.8/~productionfolder/'); /* Production path */
}else{
	define('SITE_URL', '/template-php-mvc-pdo-bootstrap-jquery/'); /* Local path */
}

/* PATHS PROYECTO */
define('URL_VIEWS'      , SITE_URL  .'views/'); //View Layer Folder
define('URL_JS'         , URL_VIEWS .'js'); //JS's folder
define('BOOTSTRAP'         , 'bootstrap'); //bootstrap Folder