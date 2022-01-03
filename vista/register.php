<!DOCTYPE html>
<html lang="en">

<?php
include('./head.html');
?>

<body class="bg-gradient-info">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Uneix-te a Simova!</h1>
                            </div>
                            <form class="user">
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="nom" placeholder="Nom">
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="text" class="form-control form-control-user" id="dni" placeholder="Dni">
                                  </div>
                              </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="cognom1" placeholder="Primer Cognom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="cognom2" placeholder="Segon Cognom">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="direccio"
                                        placeholder="Direcció">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="number" class="form-control form-control-user" id="cp" placeholder="Codi Postal">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="municipi" placeholder="Municipi">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-user" id="telefon"
                                        placeholder="Telefon">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Contrasenya">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repetir Contrasenya">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-info btn-user btn-block">
                                    Registrar-se
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/vista/forgot-password.php">He oblidat la contrasenya</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/vista/login.php">Ja estic registrat</a>
                            </div>
                        </div>
                    </div>
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
