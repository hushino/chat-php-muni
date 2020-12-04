<?php
require "conexion.php";
$renovo = $_POST['renovo'];
$rec = $_POST['rec'];
$titularid = $_POST['id'];

$sql = "INSERT INTO `renovacion`(`renovo`, `rec`, `titularid`) 
        VALUES 
        (:renovo,
        :rec,
        :titularid)";

$insert = $conn->prepare($sql);
$insert->bindParam(":renovo", $renovo);
$insert->bindParam(":rec", $rec);
$insert->bindParam(":titularid", $titularid);

if ($insert->execute()) {
    echo "perfecto";
}
