<?php
session_start();
//isset($_POST['email']) ? $email = $_POST['email']:"";
$titulo_uid = $_POST['titulo'];

require_once('../modelo/conexion.php');
?>

<?php
//echo "ha pintado algo.   ";
//echo $titulo_uid;
$titulo = getTituloFromId($titulo_uid);
//echo "ha pintado algo2345";
?>


<?php //echo "ha pasado la funcion de getConstraenya";
//echo $contrasenya_db[0][0];
require_once('../vista/carrito.php');
?>
