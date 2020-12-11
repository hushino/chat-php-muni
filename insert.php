<?php
require "conexion.php";
//require './php-image-resize-master/lib/ImageResize.php';
require_once 'function.resize.php';
require_once 'smart_resize_image.function.php';

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

$target_path = "images/" . basename($_FILES["foto"]['name']);


if (move_uploaded_file($_FILES["foto"]['tmp_name'], $target_path)) {

    //$file = $target_path;

    //indicate the path and name for the new resized file
    //$resizedFile = $target_path;

    //call the function (when passing path to pic)
    //smart_resize_image($file, null,100, 230, false, $resizedFile, false, false, 40);
      

    $sql = "INSERT INTO `filiacion`(`titular`, `nacionalidad`, `fechadenacimiento`, `domicilio`, `licencia`, `gruposanguinio`, `rh`, `disp`,`expediente`,`letra`,`anio`,`fecha`,`foto`,`cat`) 
        VALUES 
        (:titular,
        :nacionalidad,
        :fechadenacimiento,
        :domicilio,
        :licencia,
        :gruposanguinio,
        :rh,
        :disp,
        :expediente,
        :letra,
        :anio,
        :fecha,
        :foto,
        :cat)";

    $insert = $conn->prepare($sql);
    $insert->bindParam(":titular", $titular);
    $insert->bindParam(":nacionalidad", $nacionalidad);
    $insert->bindParam(":fechadenacimiento", $fechadenacimiento);
    $insert->bindParam(":domicilio", $domicilio);
    $insert->bindParam(":licencia", $licencia);
    $insert->bindParam(":gruposanguinio", $gruposanguinio);
    $insert->bindParam(":rh", $rh);
    $insert->bindParam(":disp", $disp);
    $insert->bindParam(":expediente", $expediente);
    $insert->bindParam(":letra", $letra);
    $insert->bindParam(":anio", $anio);
    $insert->bindParam(":fecha", $fecha);
    $insert->bindParam(":foto", $target_path);
    $insert->bindParam(":cat", $cat);

    if ($insert->execute()) {
        echo "perfecto";
    }
}
