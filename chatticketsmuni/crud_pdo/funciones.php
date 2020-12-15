<?php
 function conectar() {
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "crud1";
    try {
        $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}


 function contarActores() {
    try {
        $conn = conectar();
        $st = $conn->prepare("SELECT count(*) FROM members");
        $st->execute();
        $actores = $st->fetchAll();
        return $actores['0']['0'];
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

function actoresPagina($page) {
    try {
        $conn = conectar();
        $st = $conn->prepare("SELECT *  FROM members LIMIT " . (($page) * 18) . ", 18 ");
        $st->execute();
        $actores = $st->fetchAll();
        return $actores;
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}


?>