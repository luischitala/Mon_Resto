<?php

 require  '../../admin/config.php';
 require  '../../functions.php';

$conexion = conexion($db_config);
comprobarSesion();

	$id = $_GET['id'];
			/* Preparar consulta sql */
			$statement = $conexion->prepare('select * from platillos where id = :id');

			/* Ejecutar consulta sql */
			$statement->execute(
				array( 'id' => $id)
			);

			$datos = $statement->fetch();

$id =  $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$precio = $_POST['precio'];

/* Preparar consulta sql */
$statement = $conexion->prepare('update productos set nombre = :nombre,  descripcion = :descripcion, costo = :costo, precio = :precio where id = :id');

/* Ejecutar consulta sql */
$res = $statement->execute(array(
	'id' => $id,
	'nombre'=> $nombre,
	'descripcion' => $descripcion,
	'costo'=> $costo,
	'precio'=>$precio
));



if ( $res ){
	header("location: bebidas.php");
}else{
	header("location: bebidas.php?e=1");
}
