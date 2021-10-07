<?php

// ####----- INICI PHPCAS: AQUESTES LÍNIES DE CODI FAN EL LOGUIN AMB EL CAS DE LA UAB -----####
//CONSELL: Podeu moure aquestes línies de codi allà on vulgueu per forçar l'inici de sessió

$_SERVER['HTTPS'] = true;

// Load the settings from the central config file
require_once '/var/www/html/CAS_config/config.php';
// Load the CAS lib
require_once $phpcas_path . 'CAS.php';

// Initialize phpCAS
phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);
phpCAS::setNoCasServerValidation();

// force CAS authentication
phpCAS::forceAuthentication();

// at this step, the user has been authenticated by the CAS server
// and the user's login name can be read with phpCAS::getUser().

// ####----- FI PHPCAS: AQUESTES LÍNIES DE CODI FAN EL LOGUIN AMB EL CAS DE LA UAB -----####


?>
<html>
  <head>
    <title>phpCAS simple client with HTML output customization</title>
  </head>
  <body>
    <h1>Autenticació exitosa!</h1>
    <p>El NIU de l'alumne és: <b><?php echo phpCAS::getUser(); ?></b>.</p>
    <p>La versió PHP de CAS: <b><?php echo phpCAS::getVersion(); ?></b>.</p>

    <h1>Consulta a la BD</h1>
    <h2> (sortirà un error de mariaDB fins que no es configurin adientment els paràmetres): </h2>
    <?php
    $host = "mariadb"; //Aquest paràmetre deixa'l tal i com està
    $user = "tfg-b4"; //En aquest paràmetre has de posar l'usuari que t'han donat des del DEIC
    $password = "YDF1iLvX"; //En aquest paràmetre has de posar la contrasenya que t'han donat des del DEIC
    $database = "tfg-b4"; //En aquest paràmetre has de posar l'usuari que t'han donat des del DEIC (ja que la BD es diu igual que l'usuari)
    $table = "usuario"; //En aquest paràmetre has de posar la taula que vulguis llegir


    //Exemple de lectura de la BD on es llegeix la "nom_taula" i s'extreu el paràmetre "item_varchar"
    //Si vols provar aquest codi, genera una taula amb el "nom_taula" amb 2 atributs: un "item_ID" autoincremental (primary key)
    //i un "item_varchar" que sigui de tipus varchar. Després afegeix una línia amb el text que vulguis i veuràs com es mostra al web
    try {
      $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
      echo "<ul>";
      foreach($db->query("SELECT * FROM $table") as $row) {
        echo "<li>" . $row['dni'] .", ". $row['uid'] .", ". $row['nombre']." ".$row['apellido_1']." ". $row['apellido_2']. "</li>";
      }
      echo "</ul>";
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>

  </body>
</html>
