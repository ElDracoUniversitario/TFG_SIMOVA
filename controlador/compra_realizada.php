<?php
    session_start();
    $titulo_uid = $_POST['compra'];
    $operacion = 0;
    //echo $titulo_uid;
    require_once('../modelo/conexion.php');
    //$auxiliar = getHistorialFromSoporte($_SESSION['soporte']);

    if(($_SESSION['pasado']==1)||(($_SESSION['info_soporte']['viajes_restantes']==0)&&($_SESSION['info_soporte']['titulo'] == 3))){

      $operacion = UpdateSuport($titulo_uid,$_SESSION['soporte']);

    }
    //echo $operacion;
    //if($_SESSION['info_soporte']['viajes_restantes']==0){
      //$operacion = UpdateSuport($titulo_uid,$_SESSION['soporte']);
    //}

    require_once('../vista/compra_completada.php');

  //echo "La session se ha iniciado para ".$_SESSION['nombre']." con numero de soporte ". $_SESSION['soporte']." y email ".$_SESSION['email'];

//echo "ha Prueba";

?>
