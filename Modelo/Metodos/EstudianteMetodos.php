<?php

class EstudianteMetodos
{
        function BuscarEstudianteId($id)
    {
        $estudiante = new Estudiante();
        $conexion = new Conexion();

        $sql = "SELECT * FROM `ESTUDIANTE` WHERE `ID` = '$id'";
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado) > 0)
        {
            while ($fila = $resultado->fetch_assoc())
            {
                $estudiante->setCedula($fila["CEDULA"]);
                $estudiante->setNombre($fila["NOMBRE"]);
                $estudiante->setPrimerApellido($fila["PRIMERAPELLIDO"]);
                $estudiante->setSegundoApellido($fila["SEGUNDOAPELLIDO"]);
                $estudiante->setIdEspecialidad($fila["IDESPECIALIDAD"]);
                $estudiante->setIdSeccion($fila["IDSECCION"]);
            }
        } else {
            $estudiante = null;
        }
        $conexion->Cerrar();
        return $conexion;
    }

    function BuscarTodosEstudiante()
    {
        $todos = array();
        $conexion = new Conexion();

        $sql = "SELECT * FROM `ESTUDIANTE`";
        $resultado = $conexion->Ejecutar($sql);
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $e = new Estudiante();
                $e->setId($fila["ID"]);
                $e->setCedula($fila["CEDULA"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setPrimerApellido($fila["PRIMERAPELLIDO"]);
                $e->setSegundoApellido($fila["SEGUNDOAPELLIDO"]);
                $e->setIdEspecialidad($fila["IDESPECIALIDAD"]);
                $e->setIdSeccion($fila["IDSECCION"]);
                $todos[]=$e;
            }
        } else {
            $todos = null;
        }
        $conexion->Cerrar();
        return $todos;
    }

    function NuevoEstudiante(Estudiante $e)
    {
        $estado = false;
        $conexion = new Conexion();
        $sql = "INSERT INTO `ESTUDIANTE`(`CEDULA`, `NOMBRE`,`PRIMERAPELLIDO`, `SEGUNDOAPELLIDO`,`IDESPECIALIDAD`,`IDSECCION`) VALUES ('".$e->getCedula()."','".$e->getNombre()."','".$e->getPrimerApellido()."','".$e->getSegundoApellido()."','".$e->setIdEspecialidad()."','".$e->setIdSeccion()."')";
        echo $sql;
        if ($conexion->Ejecutar($sql)) {
            $estado = true;
        }
        $conexion->Cerrar();
        return $estado;
    }


    function ActualizarEstudiante(Estudiante $e)
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