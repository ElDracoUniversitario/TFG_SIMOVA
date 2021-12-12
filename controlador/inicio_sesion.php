<?php
  session_start();

//isset($_POST['email']) ? $email = $_POST['email']:"";
$email = $_POST['email'];
$contrasenya = $_POST['contrasenya'];

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
  $_SESSION['admin'] = $auxiliar['admin'];
  $_SESSION["soporte"] = getSoporteFromDni($auxiliar['dni']);
  
  //require_once("../vista/main.php");
  //header("Location: http://www.simova.es/");
  //exit();
  //require_once('../index.php');
  require_once('../vista/main.php');
  header("Location: http://www.simova.es/");
  //exit();
  
  //require_once('../vista/main.php');
  
  //echo "La session se ha iniciado para ".$_SESSION['nombre']." con numero de soporte ". $_SESSION['soporte']." y email ".$_SESSION['email'];
}
//echo "ha Prueba";

?>

