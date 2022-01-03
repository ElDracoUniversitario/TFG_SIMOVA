<?php
    session_start();
    require_once('../modelo/conexion.php');
//echo "carga conexion";
//echo $_SESSION['info_soporte']['titulo'];
	 require_once('../modelo/computo.php');
	//echo "carga cómputo";
  $_SESSION['info_soporte'] = getSoporteFromSoporte($_SESSION['soporte']);
  //echo $_SESSION['info_soporte']['uid_soporte'];
	$aux = $_SESSION['info_soporte']['titulo'];
	//$ilimitado = esIlimitado($aux);
  $titulo = getTituloFromId($aux);
  $aux1 = $_SESSION['info_soporte']['fecha_caducidad'];
  //print_r($_SESSION['info_soporte']);

	$dias_restantes = calcularFecha($aux1);
  $pasado = esPasado($aux1);

  //$porcentaje = "27";
  $porcentaje = calcularPorcentaje($dias_restantes, $titulo['caducidad']);
	//echo $dias_restantes;

    //$auxiliar = getHistorialFromSoporte($_SESSION['soporte']);
    require_once('../vista/main.php');

  //echo "La session se ha iniciado para ".$_SESSION['nombre']." con numero de soporte ". $_SESSION['soporte']." y email ".$_SESSION['email'];

//echo "ha Prueba";

?>
