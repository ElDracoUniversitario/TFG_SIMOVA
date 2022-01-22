<?php


function getConexion() {
	$host = "localhost"; //Aquest paràmetre deixa'l tal i com està
	$user = "u989932990_simova"; //En aquest paràmetre has de posar l'usuari que t'han donat des del DEIC
	$password = "~IiQcM&>L3"; //En aquest paràmetre has de posar la contrasenya que t'han donat des del DEIC
	$database = "u989932990_simova";
    return new PDO("mysql:host=$host;dbname=$database", $user, $password);
}



function getAllHistorico() {
	$db = getConexion();
	//$servicio = "";
	//$servicio = new Array();

   $sql = "SELECT * FROM historico";
   foreach ($db->query($sql) as $row) {
            $servicio[] = $row;
        }
	$db = null;
   return $servicio;
}

function getNombreDeTitulo($id) {
	$db = getConexion();


   $sql = "SELECT * FROM titulo WHERE uid_titulo=$id";
   foreach ($db->query($sql) as $row) {
            $servicio['nombre'] = $row['nombre'];
        }
	$db = null;
   return $servicio;
}

function getNombreDeEstacion($id) {
	$db = getConexion();


   $sql = "SELECT * FROM transporte WHERE estacion=$id";
   foreach ($db->query($sql) as $row) {
            $servicio['nombre'] = $row['nombre'];
        }
	$db = null;
   return $servicio;
}

function getHistorialFromSoporte($soporte) {
	$db = getConexion();

   $sql = "SELECT * FROM historico WHERE uid_soporte=$soporte";
   foreach ($db->query($sql) as $row) {
       $titulo = getNombreDeTitulo($row['titulo']);
       $estaciones = getNombreDeEstacion($row['estacion']);

      $estacion = substr($row['estacion'],0,3);
      switch($estacion){
        case '101':
          $imagen = '<img src="../imagenes/metro.png" alt="TMB Metro" width="48" height="48">';
          $transporte = "Metro";
          break;
        case '102':
          $imagen = '<img src="../imagenes/rodalies.png" alt="TMB Metro" width="48" height="48">';
          $transporte = "Rodalies Renfe";
          break;
        case '103':
          $imagen = '<img src="../imagenes/fgc.png" alt="TMB Metro" width="48" height="48">';
          $transporte = "FGC";
          break;
        case '10':
          $imagen = '<img src="../imagenes/tram.png" alt="TMB Metro" width="48" height="48">';
          $transporte = "Tram";
          break;
        case '201':
          $imagen = '<img src="../imagenes/tmb_bus.png" alt="TMB Metro" width="48" height="48">';
          $transporte = "TMB - Bus";
          break;
      }

      switch($row['estatus']){
        case 1:
          $validat = 'Validació correcte';
          $validat_img = '<img src="../imagenes/ok.png" alt="TMB Metro" width="20" height="20">';

          break;
        case 0:
          $validat = 'Error en la validació';
          $validat_img = '<img src="../imagenes/error.png" alt="TMB Metro" width="20" height="20">';
          break;
        case 2:
          $validat = 'Sense Títol Carregat';
          $validat_img = '<img src="../imagenes/error.png" alt="TMB Metro" width="20" height="20">';

          break;
        case 3:
          $validat = 'Títol caducat';
          $validat_img = '<img src="../imagenes/error.png" alt="TMB Metro" width="20" height="20">';
          break;

      }

    echo "<tr>";
      echo "<td style='text-align: center; vertical-align: middle;'>" . $imagen . "</td>"; //. $imagen . "</td>";
						      echo "<td style='vertical-align: middle;'>" . $transporte . "</td>";
						      echo "<td style='vertical-align: middle;'>" . $titulo['nombre'] ."</td>";
						      echo "<td style='vertical-align: middle;'>" . $estaciones['nombre'] ."</td>";
      echo "<td style='vertical-align: middle;'>" . $row['fecha'] . " " . $row['hora'] ."</td>";

      echo "<td style='text-align: center; vertical-align: middle;'>" . $validat_img ."</td>";
      echo "<td style='vertical-align: middle;'>" . $validat ."</td>";

    }

    echo "</tr>";
	$db = null;
   return $db;
}

function getContrasenyaDeUsuario($email) {
    //echo '<p> dentro de la funcion</p>';
	$db = getConexion();
	//echo 'tengo la conexion';
	//$servicio = "";

   //$sql = "SELECT * FROM usuario WHERE email=$email";
   $sql = "SELECT * FROM usuario";
   //echo $email;
   //echo ' ';
   //echo $sql;

	foreach($db->query($sql) as $row){
	    if ($email == $row['email']){
	    $servicio['contrasenya'] = $row['contrasenya'];
	    $servicio['email'] = $row['email'];
	    $servicio['nombre'] = $row['nombre'];
			$servicio['apellido1'] = $row['apellido1'];
			$servicio['apellido2'] = $row['apellido2'];
	    $servicio['dni'] = $row['dni'];
	    $servicio['admin'] = $row['admin'];
	    //echo '<p> dentro del foreach</p>';

	    }

	}

   $db = null;
   return $servicio;
}

function getSoporteFromDni($dni) {
    //echo '<p> dentro de la funcion getSoporteFromDni</p>';
	$db = getConexion();
	//echo 'tengo la conexion del dni';
	//$servicio = "";

   //$sql = "SELECT * FROM usuario WHERE email=$email";
   $sql = "SELECT * FROM soporte";
   //echo $dni;
   //echo ' ';
   //echo $sql;

	foreach($db->query($sql) as $row){
	    if ($dni == $row['dni_asociado']){
			    $servicio['uid_soporte'] = $row['uid_soporte'];
					$servicio['bloqueo'] = $row['bloqueo'];
					$servicio['titulo'] = $row['titulo'];
					$servicio['fecha_caducidad'] = $row['fecha_caducidad'];
					$servicio['zonas'] = $row['zonas'];
					$servicio['viajes_restantes'] = $row['viajes_restantes'];

	    //echo '<p> dentro del foreach dni '.$servicio['uid_soporte'] . "</p>";}
	    }
	}

   $db = null;
   return $servicio;
}

function getSoporteFromSoporte($soporte) {
    //echo '<p> dentro de la funcion getSoporteFromDni</p>';
	$db = getConexion();
	//echo 'tengo la conexion del dni';
	//$servicio = "";

   //$sql = "SELECT * FROM usuario WHERE email=$email";
   $sql = "SELECT * FROM soporte WHERE uid_soporte=".$soporte."";
   //echo $dni;
   //echo ' ';
   //echo $sql;

	foreach($db->query($sql) as $row){

			    $servicio['uid_soporte'] = $row['uid_soporte'];
					$servicio['bloqueo'] = $row['bloqueo'];
					$servicio['titulo'] = $row['titulo'];
					$servicio['fecha_caducidad'] = $row['fecha_caducidad'];
					$servicio['zonas'] = $row['zonas'];
					$servicio['viajes_restantes'] = $row['viajes_restantes'];

	    //echo '<p> dentro del foreach dni '.$servicio['uid_soporte'] . "</p>";}

	}

   $db = null;
   return $servicio;
}

function getTituloFromId($id) {
    //echo '<p> dentro de la funcion getSoporteFromDni</p>';
	$db = getConexion();
	//echo 'tengo la conexion del dni';
	//$servicio = "";

   //$sql = "SELECT * FROM usuario WHERE email=$email";
   $sql = "SELECT * FROM titulo WHERE uid_titulo=".$id."";
   //echo $dni;
   //echo 'La id es: '.$id;
   //echo $sql;

	foreach($db->query($sql) as $row){
	    //if ($dni == $row['dni_asociado']){
	    $servicio['uid_titulo'] = $row['uid_titulo'];
			$servicio['nombre'] = $row['nombre'];
			$servicio['numero_viajes'] = $row['numero_viajes'];
			$servicio['caducidad'] = $row['caducidad'];
			$servicio['ilimitado'] = $row['ilimitado'];
			$servicio['precio'] = $row['precio'];
			$servicio['imagen'] = $row['imagen'];
	    //echo '<p> dentro del foreach dni '.$servicio['uid_soporte'] . "</p>";}
	    //}
	}

   $db = null;
   return $servicio;
}

function UpdateSuport($id, $soporte) {

	 $db = getConexion();
	 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 $op = 0;

	if($id == 3){

	   $sql = "UPDATE soporte SET titulo=".$id.", fecha_caducidad=0, viajes_restantes=10 WHERE uid_soporte=".$soporte."";
	   $stmt = $db->prepare($sql);
		 $stmt->execute();
		 $op = 1;
		}else{
			$sql = "UPDATE soporte SET titulo=".$id.", fecha_caducidad=1, viajes_restantes=0 WHERE uid_soporte=".$soporte."";
			$stmt = $db->prepare($sql);
 		  $stmt->execute();
			$op =1;
			}
	$db = null;
   return $op;
}


//}
?>
