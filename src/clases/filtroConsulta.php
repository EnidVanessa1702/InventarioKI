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
        $consulta = "WHERE productos.modelo = '$modelo' ";
    }

    if ($serie != '') {
        if ($consulta != '') {
            $consulta .= " AND productos.serie = '$serie' ";
        } else {
            $consulta = "WHERE productos.serie = '$serie' ";
        }
    }

    if ($localizacion != '') {
        if ($consulta != '') {
            $consulta .= " AND productos.localizacion = '$localizacion' ";
        } else {
            $consulta = "WHERE productos.localizacion = '$localizacion' ";
        }
    }

    if ($almacen != '') {
        if ($consulta != '') {
            $consulta .= " AND productos.almacen = '$almacen' ";
        } else {
            $consulta = "WHERE productos.almacen = '$almacen' ";
        }
    }
    

    $sql = "SELECT Id, modelo, serie, localizacion, almacen, existencia  from productos
    $consulta ";
    $result = mysqli_query($conexion, $sql);

} else {
    $sql = "SELECT Id, modelo, serie, localizacion, almacen, existencia  from productos";
    $result =  mysqli_query($conexion, $sql);
}