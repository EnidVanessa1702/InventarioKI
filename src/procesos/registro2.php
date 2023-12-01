<?php
    session_start();
    require_once "../clases/conexion.php";
    require_once "../clases/registro2.php";

    $obj = new registros();

    $datos = array(
        $_POST['modelo'],
        $_POST['serie'],
        $_POST['localizacion'],
        $_POST['almacen'],
        $_POST['existencia']
    );

    $obj->regis($datos);
?>