<!DOCTYPE html>
<html lang="es">

<?php
session_start();

  if(!isset($_SESSION["soporte"])){
      //header("Location: http://www.simova.es/");
      require_once("../controlador/denegado.php");

    exit();}
require_once('../vista/head_carrito.php');
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
                    <h1 class="h3 mb-1 text-gray-800">Resumen</h1>
                    <p class="mb-4"></p>

                    <!-- Content Row -->


                        <!-- <div class="col-lg-6">-->

                        <!-- Border Left Utilities -->





      <!-- Content Column -->


          <!-- Project Card Example -->


          <!-- Color System -->

<?php
if($operacion == 1){
              echo'<div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                      <div class="card-body">
                          Compra Completada Correctamente
                          <div class="text-white-50 small">Espere mientras se le redirige a la página principal.</div>
                      </div>
                  </div>
              </div>';}

else{
              echo '<div class="card bg-danger text-white shadow">
                  <div class="card-body">
                      Compra Fallida, Dispone de un Título Válido
                      <div class="text-white-50 small">Espere mientras se le redirige a la página principal.</div>
                  </div>
              </div>';}




  //header("refresh:5;url=https://www.simova.es/controlador/cargar_main.php");
?>





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
