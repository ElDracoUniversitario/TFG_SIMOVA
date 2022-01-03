<?php
    session_start();
    require_once('../modelo/conexion.php');
    //$auxiliar = getHistorialFromSoporte($_SESSION['soporte']);
    require_once('../vista/historial_usuario.php');
  
  //echo "La session se ha iniciado para ".$_SESSION['nombre']." con numero de soporte ". $_SESSION['soporte']." y email ".$_SESSION['email'];

//echo "ha Prueba";

?>