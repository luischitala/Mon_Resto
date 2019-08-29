<?php session_start();
 
 require  '../../admin/config.php';
 require  '../../functions.php';

$conexion = conexion($db_config);
comprobarSesion();

if (!$conexion) {
	header('Location: error.php');
}
 

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$precio = $_POST['precio'];

$statement = $conexion->prepare('insert into productos (id, clave, nombre, descripcion, costo, precio) values (null, "be", :nombre, :descripcion, :costo, :precio)');

$res = $statement->execute(array(
	'nombre' => $nombre,
	'descripcion' => $descripcion,
	'costo' => $costo,
	'precio' => $precio

));

$statement->debugDumpParams();

if ($res) {
	header('Location: bebidas.php');
} else{
	//header('Location: platillos.php?e=1');
}



require '../../views/agregar_bebida.view.php';



 ?>




