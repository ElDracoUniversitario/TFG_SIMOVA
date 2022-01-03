<?php
    session_start();
    require_once('../modelo/conexion.php');
	 //echo $_SESSION['soporte'];
    //$auxiliar = getHistorialFromSoporte($_SESSION['soporte']);
    require_once('../vista/comprar.php');
  
  //echo "La session se ha iniciado para ".$_SESSION['nombre']." con numero de soporte ". $_SESSION['soporte']." y email ".$_SESSION['email'];

//echo "ha Prueba";

?>