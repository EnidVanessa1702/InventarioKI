<?php

class conectar
{
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "Kon.2022*";
    private $bd = "inventarioki";

    public function conexion ()
    {
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->bd);
        return $conexion;
    }
}
?>