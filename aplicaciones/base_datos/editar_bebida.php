<?php session_start();
 
 require  '../../admin/config.php';
 require  '../../functions.php';

$conexion = conexion($db_config);
comprobarSesion();

if (!$conexion) {
	header('Location: error.php');
}


					$id = $_GET['id'];
			/* Preparar consulta sql */
			$statement = $conexion->prepare('select * from productos where id = :id');

			/* Ejecutar consulta sql */
			$statement->execute(
				array( 'id' => $id)
			);

			$datos = $statement->fetch();
 					

 require '../../views/editar_bebida.view.php';

 ?>
