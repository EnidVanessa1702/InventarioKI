<?php
   
    require_once "../clases/conexion.php";
    require_once "../clases/almacen2.php";

    $obj = new almacen();

    $datos = array(
        $_POST['idAlmacen'],
        $_POST['equipo'],
        $_POST['serieProd'],
        $_POST['ubicacion'],
        $_POST['almace'],
        $_POST['cantidad'],

    );

    $obj->actualizarStock($datos);
?>