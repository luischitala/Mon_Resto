<?php session_start();
require 'admin/config.php';
require 'functions.php';

if (isset($_SESSION['nombre'])) {
	header('Location: login.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$user_type =$_POST['user_type'];
	$errores = '';
	
	if (empty($user) or empty($password) or empty($password2)) {
			$errores .= '<li style="color:white;">Por favor rellena todos los datos correctamente</li>';
		} else{
		$conexion = conexion($db_config);
		}			
	
	
		$statement = $conexion->prepare('select * from users where user = :user limit 1');
		$statement->execute(array(':user' => $user));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<li style="color:white;">El nombre de usuario ya existe</li>';
		}

		$password = hash('sha512',$password);
		$password2 = hash('sha512',$password2);
		
		if ($password != $password2) {
			$errores .= '<li style="color:white;">Las contraseñas no son iguales</li>';
		}

	

	if ($errores == '') {
		$statement = $conexion->prepare('insert into users (id,user,password,user_type) values (null,:user,:password,:user_type)');
		$statement->execute(array('user' => $user, 'password' => $password, 'user_type' => $user_type));
		$statement->debugDumpParams();
		header('Location: login.php');
	}
	
}




 require 'views/registro.view.php ' ?>
