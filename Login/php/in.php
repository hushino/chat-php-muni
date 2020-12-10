<?php
require "../../conexion.php";

$usuario=$_POST['nombre'];
$password=$_POST['password'];

$sql="SELECT `id`, `nombre`, `password` FROM `users` WHERE nombre=:nombre AND password=:password";

$buscarUser=$conn->prepare($sql);
$buscarUser->bindParam(":nombre",$usuario);
$buscarUser->bindParam(":password",$password);
$buscarUser->execute();
$buscarUser2=$buscarUser->fetch(PDO::FETCH_ASSOC);
if($buscarUser2!=null){
    session_start();
    $_SESSION['datosUser']=$buscarUser2;
    header("location:  ../../index.php"); //../../inicio.php ../../../../inicio.php
}

if ($usuario!=$buscarUser2['nombreUser']){
    $error="usuario incorrecto ";
echo '<script>alert("'.$error.'")</script>';
echo '<script>location.href = "../../inicio.php"</script>';
}


















?>