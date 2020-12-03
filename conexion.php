<?php
try {
$servername = "localhost";
$usuario = "root";
$pass = "";
$conn = new PDO('mysql:host=localhost;dbname=filiacion_del_conductor', $usuario, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
