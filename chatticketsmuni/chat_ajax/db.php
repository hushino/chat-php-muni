<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "crud1";



//$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
try {
	$conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $password, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $conexion;
} catch (Exception $ex) {
	echo $ex->getMessage();
}

function formatearFecha($fecha)
{
	return date('g:i a', strtotime($fecha));
}
