<?php
  session_start();

//isset($_POST['email']) ? $email = $_POST['email']:"";
$email = $_POST['email'];
$contrasenya = $_POST['contrasenya'];
//echo $email;
//echo $contrasenya;

require_once('../modelo/conexion.php');
//require_once("../vista/forgot-password.php");

//echo 'Ha cargado el modelo';

//echo "ha pintado algo";
$auxiliar = getContrasenyaDeUsuario($email);

//echo "ha pasado la funcion de getConstraenya";
//echo $auxiliar['contrasenya'];

if($contrasenya == $auxiliar['contrasenya']){
  $_SESSION["email"] = $email;
  //print("esto ha llegado hasta la session");
  $_SESSION['nombre'] = $auxiliar['nombre'];
  $_SESSION['apellido1'] = $auxiliar['apellido1'];
  $_SESSION['apellido2'] = $auxiliar['apellido2'];
  $_SESSION['admin'] = $auxiliar['admin'];
  $_SESSION['info_soporte'] = getSoporteFromDni($auxiliar['dni']);
  //echo $_SESSION['info_soporte']['uid_soporte'];
$_SESSION['soporte'] = $_SESSION['info_soporte']['uid_soporte'];
  //$aux = getSoporteFromDni($auxiliar['dni']);
  //$_SESSION["soporte"] = getSoporteFromDni($auxiliar['dni']);

//echo $_SESSION["soporte"];
  require_once("../controlador/cargar_main.php");
  //require_once("../vista/main.php");
  header("Location: http://www.simova.es/");
  //exit();
  //require_once('../index.php');
  //require_once('../vista/main.php');
  //header("Location: http://www.simova.es/");
  //exit();

  //require_once('../vista/main.php');

  //echo "La session se ha iniciado para ".$_SESSION['nombre']." con numero de soporte ". $_SESSION['soporte']." y email ".$_SESSION['email'];
}
//echo "ha Prueba";

?>
