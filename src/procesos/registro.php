<?php
    session_start();
    require_once "../clases/conexion.php";
    require_once "../clases/registro.php";

    $obj = new registro();

    $datos = array(
        $_POST['modelo'],
        $_POST['serie'],
        $_POST['localizacion'],
        $_POST['almacen'],
        $_POST['existencia']
    );

    $obj->registro($datos);
?>