<?php
class almacen
{
    function actualizarStock($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE produc2 SET modelo = '$datos[1]', serie = '$datos[2]', localizacion = '$datos[3]', 
        almacen = '$datos[4]', existencia = '$datos[5]' 
        WHERE id = '$datos[0]' ";
        
        if (!mysqli_query($conexion, $sql)) {
            $respuesta = array('result' => 'error', 'mensaje' => 'No se pudo actualizar el producto');
        } else {
            $respuesta = array('result' => 'ok', 'mensaje' => 'Producto Actualizado');
        }

        echo json_encode($respuesta);
    }
}