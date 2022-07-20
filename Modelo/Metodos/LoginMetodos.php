<?php
class LoginMetodos
{
    function InicioSesion($correo, $contrasena, Estudiante $e, Profesor $p,)
    {
        $estado = false;
        $conexion = new Conexion();
        $sql = "UPDATE ESTUDIANTE SET CEDULA='".$e->getCedula()."',NOMBRE='".$e->getNombre()."',PRIMERAPELLIDO='".$e->getPrimerApellido()."',SEGUNDOAPELLIDO='".$e->getSegundoApellido()."',IDESPECIALIDAD='".$e->getIdEspecialidad()."',IDSECCION='".$e->getIdSeccion()."' WHERE `ID`=".$c->getId();
        echo $sql;
        if($conexion->Ejecutar($sql))
        {
            $estado = true;
        }
        $conexion->Cerrar();
        return $estado;
    }
}
