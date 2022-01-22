<?php
session_start();
if(!isset($_SESSION["soporte"])){
    //header("Location: http://www.simova.es/");
    require_once("../controlador/denegado.php");
    exit();
}?>
<html lang="cat">

<?php
//echo $_SESSION['soporte'];
//include(__DIR__ .'/head.html');
require_once('../vista/head.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar bg-gradient-info es verde-->
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
                //include('./topbar.php');
                require_once('../vista/topbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Títol Carregat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $titulo['nombre'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Viatges Restants</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
if($_SESSION['info_soporte']['titulo'] == 3){
echo $_SESSION['info_soporte']['viajes_restantes'];}
else{
echo "ILIMITADO";}


?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-route fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dies restants
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <?php if($_SESSION['pasado'] == 0){
                                                    echo "<div class='h5 mb-0 mr-3 font-weight-bold text-gray-800'>".$dias_restantes."</div>
                                                </div>
                                                <div class='col'>
                                                    <div class='progress progress-sm mr-2'>
                                                      <div class='progress-bar bg-info' role='progressbar'
                                                            style='width:".$porcentaje."%' aria-valuenow='50' aria-valuemin='0'
                                                            aria-valuemax='100'></div>
                                                    </div>
                                                </div>";}else{
                                                  echo "<div class='h5 mb-0 mr-3 font-weight-bold text-gray-800'> TITULO CADUCADO</div>
                                              </div>";
                                                    }?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Estado del Soporte</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
if($_SESSION['info_soporte']['bloqueo'] == 1){
echo "BLOQUEADO";
$estado ="fas fa-lock";}
else{
echo "CORRECTO";
$estado ="fas fa-unlock";}


?></div>
                                        </div>
                                        <div class="col-auto">
                                            <?php echo "<i class='".$estado." fa-2x text-gray-300'></i>";?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Títol Carregat</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo $titulo['nombre'];?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Dades de l'Usuari</h6>
                                </div>
                                <!-- Card Body
                                <div class="card-body">-->
                                  <div class="col-lg-6 mb-4">
                                  <div class="card border-left-info shadow h-100 py-2">
                                      <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                <div class="text-m font-weight-bold text-info text-uppercase mb-1">
                                                    Dades de l'usuari</div>
                                                <br>
                                                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                      Nom i Cognoms</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido1']." ".$_SESSION['apellido2'];?></div>
                                                  <br>
                                                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                      E-mail</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION['email'];?></div>
                                                  <br>
                                                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                      Número de Suport</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION['soporte'];?></div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                  <img display="block" margin-left="auto"  margin-right="auto" width=100% src="../img/<?php echo $_SESSION['soporte'];?>.png">
                                            </div>
                                        </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-6 mb-4">
                                  <div class="card border-left-secondary shadow h-100 py-2">
                                      <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                              <div class="text-m font-weight-bold text-secondary text-uppercase mb-1">
                                                  Perfils</div>
                                              <br>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Jove</div>
                                                <br>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Empresa</div>
                                                <br>

                                            </div>
                                          </div>
                                      </div>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
