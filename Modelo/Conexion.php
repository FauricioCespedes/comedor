<?php

class Conexion
{
    private $mysqli;

    function Ejecutar($query)
    {
        $user="root";
        $pass="";
        $db="comedor";
        if (!$this->mysqli=new mysqli('localhost',$user, $pass, $db)) {
            die('Error de conexion (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
        $this->mysqli->autocommit(TRUE);
        $resultado=$this->mysqli->query($query);
        return $resultado;
    }

    function Cerrar()
    {
        $this->mysqli->close();
    }
}
