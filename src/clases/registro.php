<?php
class registro
{
    function registro($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "INSERT INTO productos (modelo, serie, localizacion, almacen, existencia) 
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]' ,'$datos[4]') ";

        $consultar = "SELECT * from productos WHERE serie = '$datos[1]'";
        $validar = mysqli_query($conexion, $consultar);

        if (mysqli_num_rows($validar) > 0) {
            $resultado  = 'error';
        } else {
            mysqli_query($conexion, $sql);
            $resultado = 'ok';
        }
        print($resultado);
    }





}
