<?php
require_once "conexion.php";
$c = new conectar();
$conexion = $c->conexion();
//$filtro = $_GET['std'];
if (isset($_POST['buscar'])) {
    $modelo = $_POST['modelo'];
    $serie = $_POST['serie'];
    $localizacion = $_POST['localizacion'];
    $almacen = $_POST['almacen'];
    $existencia = $_POST['existencia'];

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
    if ($existencia != '') {
        if ($consulta != '') {
            $consulta .= " AND productos.existencia = '$existencia' ";
        } else {
            $consulta = "WHERE productos.existencia = '$existencia' ";
        }
    }

    $sql = "SELECT productos.modelo, productos.serie,  productos.almacen, productos.existencia, 
    
    FROM productos 
    $consulta ";
    $result = mysqli_query($conexion, $sql);

} else {
    $sql = "SELECT productos.modelo, productos.serie,  productos.almacen, productos.existencia, productos.localizacion
    FROM productos  ";
    $result =  mysqli_query($conexion, $sql);
}