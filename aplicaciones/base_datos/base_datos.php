<?php session_start();
 
 require '../../admin/config.php';
 require '../../functions.php';

$conexion = conexion($db_config);
comprobarSesion();

if (!$conexion) {
	header('Location: error.php');
}
 require '../../views/base_datos.view.php';

 ?>
