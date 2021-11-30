<?php

// ####----- INICI PHPCAS: AQUESTES LÍNIES DE CODI FAN EL LOGUIN AMB EL CAS DE LA UAB -----####
//CONSELL: Podeu moure aquestes línies de codi allà on vulgueu per forçar l'inici de sessió

//$_SERVER['HTTPS'] = true;

// Load the settings from the central config file
//require_once '/var/www/html/CAS_config/config.php';
// Load the CAS lib
//require_once $phpcas_path . 'CAS.php';

// Initialize phpCAS
//phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);
//phpCAS::setNoCasServerValidation();

// force CAS authentication
//phpCAS::forceAuthentication();

// at this step, the user has been authenticated by the CAS server
// and the user's login name can be read with phpCAS::getUser().

// ####----- FI PHPCAS: AQUESTES LÍNIES DE CODI FAN EL LOGUIN AMB EL CAS DE LA UAB -----####


?>
<html lang="cat">

<?php
include('./head.html');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include('./sidebar.html');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Topbar -->
                <?php
                include('./topbar.html');
                ?>
                <!-- End of Topbar -->
<!-- Body-->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuaris</h1>
                    <p class="mb-4">Llistat d'usuaris donats d'alta.</p><!--<a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>-->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Usuaris</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>UID</th>
                                            <th>Nom</th>
                                            <th>Primer Cognom</th>
                                            <th>Segon Cognom</th>
                                            <th>CP</th>
                                            <th>Municipi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>UID</th>
                                            <th>Nom</th>
                                            <th>Primer Cognom</th>
                                            <th>Segon Cognom</th>
                                            <th>CP</th>
                                            <th>Municipi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $host = "localhost"; //Aquest paràmetre deixa'l tal i com està
                                    $user = "u989932990_simova"; //En aquest paràmetre has de posar l'usuari que t'han donat des del DEIC
                                    $password = "~IiQcM&>L3"; //En aquest paràmetre has de posar la contrasenya que t'han donat des del DEIC
                                    $database = "u989932990_simova"; //En aquest paràmetre has de posar l'usuari que t'han donat des del DEIC (ja que la BD es diu igual que l'usuari)
                                    $table = "usuario"; //En aquest paràmetre has de posar la taula que vulguis llegir


                                    //Exemple de lectura de la BD on es llegeix la "nom_taula" i s'extreu el paràmetre "item_varchar"
                                    //Si vols provar aquest codi, genera una taula amb el "nom_taula" amb 2 atributs: un "item_ID" autoincremental (primary key)
                                    //i un "item_varchar" que sigui de tipus varchar. Després afegeix una línia amb el text que vulguis i veuràs com es mostra al web
                                    try {
                                      $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);

                                      foreach($db->query("SELECT * FROM $table") as $row) {
                                      echo "<tr>";
                                        echo "<td>" . $row['dni'] ."</td>";
                                        echo "<td>" . $row['nombre'] ."</td>";
                                        echo "<td>" . $row['apellido1'] ."</td>";
                                        echo "<td>" . $row['apellido2'] ."</td>";
                                        echo "<td>" . $row['cp'] ."</td>";
                                        echo "<td>" . $row['municipio'] ."</td>";
                                      echo "</tr>";
                                      $db = null;
                                      }

                                    } catch (PDOException $e) {
                                        print "Error!: " . $e->getMessage() . "<br/>";
                                        die();
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include('./footer.html');
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
