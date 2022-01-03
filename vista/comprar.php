<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if(!isset($_SESSION["soporte"])){
    //header("Location: http://www.simova.es/");
    require_once("../controlador/denegado.php");
    exit();
}?>

<?php
require_once('../vista/head.php');
?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        if($_SESSION['admin'] == 1){
            require_once('../vista/sidebar_admin.php');
        }else{
            require_once('../vista/sidebar.php');
        }
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                require_once('../vista/topbar.php');

                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Tienda</h1>
                    <p class="mb-4"></p>

                    <!-- Content Row -->
                    <div class="row">
							<form action="../controlador/gestion_compra.php" method="post" class="user">

                        <!-- <div class="col-lg-6">-->

                        <!-- Border Left Utilities -->
                        <?php
                        $host = "localhost"; //Aquest paràmetre deixa'l tal i com està
                        $user = "u989932990_simova"; //En aquest paràmetre has de posar l'usuari que t'han donat des del DEIC
                        $password = "~IiQcM&>L3"; //En aquest paràmetre has de posar la contrasenya que t'han donat des del DEIC
                        $database = "u989932990_simova"; //En aquest paràmetre has de posar l'usuari que t'han donat des del DEIC (ja que la BD es diu igual que l'usuari)
                        $table = "titulo"; //En aquest paràmetre has de posar la taula que vulguis llegir
                        //$table1 = "transporte";

                        //Exemple de lectura de la BD on es llegeix la "nom_taula" i s'extreu el paràmetre "item_varchar"
                        //Si vols provar aquest codi, genera una taula amb el "nom_taula" amb 2 atributs: un "item_ID" autoincremental (primary key)
                        //i un "item_varchar" que sigui de tipus varchar. Després afegeix una línia amb el text que vulguis i veuràs com es mostra al web
                        try {
                          $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
                          //console.log("Hola");

                          foreach($db->query("SELECT * FROM $table") as $row) {

                            if($row['ilimitado']==1){
                              $num_viajes = "Il·limitats";}
                            else{
                              $num_viajes = $row['numero_viajes'];}
                             if($row['uid_titulo']==0){}
                             else{

                            echo "<div class='card mb-4 py-3 border-bottom-info'  style='margin-right:10px'> ";
                              echo "<div class='card-body' style='width:100,height:100'>";
                                echo "<table>";
                                  echo "<tr>";
                                    echo "<td rowspan='5'><img src='../imagenes/" . $row['imagen'] ."' alt='Imagen de una ".$row['nombre']."' width=100 height=100></td>"; //. $imagen . "</td>";
                                  echo "</tr>";
                                  echo "<tr><td>".$row['nombre']."</td></tr>" ;
                                  echo "<tr><td>Número de viatjes: ".$num_viajes."</td></tr>" ;
                                  echo "<tr><td>Te una vigencia de ".$row['caducidad']." díes consecutíus</td></tr>" ;
                                  echo "<tr><td>Preu: ".$row['precio']." €</td></tr>" ;
                                  echo "<td> <button type='submit' name='titulo' value=".$row['uid_titulo']." class='btn btn-info btn-icon-split'>Comprar</button></td>";

                                echo "</table>";
                              echo "</div>";
                            echo "</div>";
                             }

                          }
                        $db = null;

                        } catch (PDOException $e) {
                            print "Error!: " . $e->getMessage() . "<br/>";
                            die();
                        }
                        ?>



                        </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            //include('./topbar.php');
            require_once('../vista/footer.php');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
