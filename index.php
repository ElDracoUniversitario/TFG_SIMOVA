<?php
session_start();
define('__ROOT__', dirname(__FILE__));
//require_once(__ROOT__."/vista/prueba.php");
    


//echo __ROOT__;

//echo session_id();

if(isset($_SESSION["soporte"])){
    //header("Location: http://www.simova.es/");
    //exit();
    require_once(__ROOT__."/vista/main.php");
    
}
if(!isset($_SESSION["soporte"])){
    //header("Location: http://www.simova.es/");
    //exit();
    require_once(__ROOT__."/vista/login.php");
    
}
//else{
    //require_once(__ROOT__."/vista/login.php");
    //}
    //echo "prueba";
    //echo $_SESSION["soporte"];
	
	//header('Location: ./vista/login.php');


?>
