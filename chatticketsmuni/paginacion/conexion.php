<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'paginacion_2';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Conexion fallida: lo sentimos mucho.'.$e->getMessage());
}



?>