<?php

//isset($_POST['email']) ? $email = $_POST['email']:"";
$email = $_POST['email'];
$contrasenya = $_POST['contrasenya'];


?>


<html>
<body>
<p>

<?php echo $email;
echo $contrasenya;  ?>

</p>


<?php

require_once('./modelo/conexion.php');
?>
<p>

<?php echo 'Ha cargado el modelo';  ?>

</p>
<?php
echo "ha pintado algo";
$contrasenya_db = getContrasenyaDeUsuario($email);
?>

<p>

<?php echo "ha pasado la funcion de getConstraenya";
//echo $contrasenya_db[0][0];  ?>

</p>

<?php
//if($contrasenya == $contrasenya_db[1]){
  //session_start();
  //$_SESSION["usuario"] = $email;
  //print("esto ha llegado hasta la session");
  //$_SESSION["soporte"] = $conexion->getSoportefromEmail($email);
//}
echo "ha Prueba";

?>

<p>

<?php echo $email;  ?>

</p>
</body>
</html>
