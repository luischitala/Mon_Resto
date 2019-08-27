<?php session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user= limpiarDatos($_POST['user']);
	$password = limpiarDatos($_POST['password']);
	$password = hash('sha512',$password);

	$conexion = conexion($db_config);
	$statement = $conexion->prepare('SELECT * FROM users WHERE user = :user AND password = :password');
	$statement->execute(array('user' => $user, 'password' => $password,));
	$statement->debugDumpParams();

	$resultado = $statement->fetch();
	print_r($resultado);
	var_dump($resultado);
	if ($resultado['user_type'] == $ps_admin['user_type']) {
		$_SESSION['admin'] = $resultado['user'];
		header('Location: index.php');
		
	}else{
		header('Location: comandero.php');
	}

}

require 'views/login.view.php';

 ?>