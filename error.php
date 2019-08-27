<?php session_start();
 
 require 'admin/config.php';
 require 'functions.php';

$conexion = conexion($db_config);
comprobarSesion();


 require 'views/error.view.php';

 ?>
