<?php
    session_start();
    session_unset();
    session_destroy();
    require_once("../vista/login.php");
    header("Location: https://www.simova.es/");


?>
