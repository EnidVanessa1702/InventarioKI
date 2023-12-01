<?php
require_once "conexion.php";
$c = new conectar();
$conexion = $c->conexion();
if (isset($_POST['buscar'])) {
    $modelo = $_POST['modelo'];
    $serie = $_POST['serie'];
    $localizacion = $_POST['localizacion'];
    $almacen = $_POST['almacen'];

    $consulta = "";

    if ($modelo != '') {
        $consulta = "WHERE produc2.modelo = '$modelo' ";
    }

    if ($serie != '') {
        if ($consulta != '') {
            $consulta .= " AND produc2.serie = '$serie' ";
        } else {
            $consulta = "WHERE produc2.serie = '$serie' ";
        }
    }

    if ($localizacion != '') {
        if ($consulta != '') {
            $consulta .= " AND produc2.localizacion = '$localizacion' ";
        } else {
            $consulta = "WHERE produc2.localizacion = '$localizacion' ";
        }
    }

    if ($almacen != '') {
        if ($consulta != '') {
            $consulta .= " AND produc2.almacen = '$almacen' ";
        } else {
            $consulta = "WHERE produc2.almacen = '$almacen' ";
        }
    }
    

    $sql = "SELECT Id, modelo, serie, localizacion, almacen, existencia  from produc2
    $consulta ";
    $result = mysqli_query($conexion, $sql);

} else {
    $sql = "SELECT Id, modelo, serie, localizacion, almacen, existencia  from produc2";
    $result =  mysqli_query($conexion, $sql);
}