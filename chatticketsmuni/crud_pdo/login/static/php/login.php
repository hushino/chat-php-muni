<?php
session_start();
require "conexion.php";
$usuario=$_POST['username'];
$password=$_POST['password'];


    $sql = "SELECT `idUser`, `nombreUser`, `passwordUser`, `privilegio` FROM `users` WHERE `nombreUser` = :user";
   
	$records = $conn->prepare("SELECT `idUser`, `nombreUser`, `passwordUser`, `privilegio` FROM `users` WHERE `nombreUser` = :user");
	$records->bindParam(':user', $usuario);

	$records->execute();

	$results = ($records->fetch(PDO::FETCH_ASSOC));
	print_r($results);

	if ($results!=null) {
		$_SESSION['usuario'] =  $usuario;
		$_SESSION['privilegio'] =  $results['privilegio'];
		echo '<script>location.href ="../../../index.php";</script>';
	}else{
		echo '<script>alert("El ususario no existe")<script>';
		echo '<script>location.href ="../../index.html";</script>';
	}


?>