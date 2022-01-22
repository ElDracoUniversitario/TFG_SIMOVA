<!DOCTYPE html>
<html lang="es">

<?php
session_start();

  if(!isset($_SESSION["soporte"])){
      //header("Location: http://www.simova.es/");
      require_once("../controlador/denegado.php");

    exit();}
require_once('../vista/head.php');
?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        require_once('../vista/sidebar.php');
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
                    <h1 class="h3 mb-1 text-gray-800">Carrito</h1>
                    <p class="mb-4"></p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- <div class="col-lg-6">-->

                        <!-- Border Left Utilities -->

                           <div class='card mb-4 py-3 border-bottom-info'  style='margin-right:10px'>
                              <div class='card-body'>
                                <table>
<tr>
<form action="../controlador/compra_realizada.php" method="post" class="user">
<?php
if($titulo['ilimitado']==1){
                              $num_viajes = "Il·limitats";}
                            else{
                              $num_viajes = $titulo['numero_viajes'];}

                                    echo "<td rowspan='5'><img src='../imagenes/" . $titulo['imagen'] ."' alt='Imagen de una ".$titulo['nombre']."' width=100 height=100></td>"; //. $imagen . "</td>";
                                  echo "</tr>";
                                  echo "<tr><td>".$titulo['nombre']."</td></tr>" ;
                                  echo "<tr><td>Número de viatjes: ".$num_viajes."</td></tr>" ;

                                  echo "<tr><td>Preu: ".$titulo['precio']." €</td></tr>" ;
                                  echo "<td> <button type='submit' name='compra' value=".$titulo['uid_titulo']." class='btn btn-info btn-icon-split'>Realitzar Pagament</button></td>";

?>
</tr>
</form>

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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
