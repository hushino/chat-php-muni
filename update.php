<?php
require "conexion.php";
$id = $_POST['id'];
$titular = $_POST['titular'];
$nacionalidad = $_POST['nacionalidad'];
$fechadenacimiento = $_POST['fechadenacimiento'];
$domicilio = $_POST['domicilio'];
$licencia = $_POST['licencia'];
$gruposanguinio = $_POST['gruposanguinio'];
$rh = $_POST['rh'];
$disp = $_POST['disp'];
$expediente = $_POST['expediente'];
$letra = $_POST['letra'];
$anio = $_POST['anio'];
$fecha = $_POST['fecha'];
$cat = $_POST['cat'];

//if (!is_null($_FILES["foto"])) {
    $target_path = "images/" . basename($_FILES["foto"]['name']);


    if (move_uploaded_file($_FILES["foto"]['tmp_name'], $target_path)) {
        $sql = "UPDATE `filiacion` SET titular='$titular', foto='$target_path', nacionalidad='$nacionalidad',
    fechadenacimiento='$fechadenacimiento', domicilio='$domicilio', licencia='$licencia', gruposanguinio='$gruposanguinio', rh='$rh',
    disp='$disp', expediente='$expediente', letra='$letra', anio='$anio', fecha='$fecha', cat='$cat' 
    WHERE id=$id";

        $insert = $conn->prepare($sql);

        if ($insert->execute()) {
            echo "perfecto";
        }
    }
//}