<?php

class EstudianteControlador
{
    public function BuscarId()
    {
        require_once "./Vista/estudiante.php";
    }

    public function BuscarTodos()
    {
        require_once "./Modelo/Conexion.php";
        require_once "./Modelo/Entidades/Estudiantephp";
        require_once "./Modelo/Metodos/EstudianteMetodos.php";

        $estudianteMetodos = new EstudianteMetodos();
        $todosEstudiante = $estudianteMetodos->BuscarTodosEstudiante();
    }

    public function Nuevo()
    {
        require_once "./Modelo/Metodos/EstudianteMetodos.php";
        require_once "./Modelo/Entidades/Estudiante.php";
        require_once "./Modelo/Conexion.php";

        $estudiante = new Estudiante();
        $estudianteMetodos = new EstudianteMetodos();

        $estudiante->setCedula($_POST['cedula']);
        $estudiante->setNombre($_POST['nombre']);
        $estudiante->setPrimerApellido($_POST['primerApellido']);
        $estudiante->setSegundoApellido($_POST['segundoApellido']);
        $estudiante->setIdEspecialidad($_POST['idEspecialidad']);
        $estudiante->setIdSeccion($_POST['idSeccion']);


        if ($estudianteMetodos->NuevoEstudiante($estudiante))
            header("Location: ./index.php?controlador=Index&accion=Index");
        else
            header("Location: ./index.php?controlador=Index&accion=Error");
    }

    public function Actualizar()
    {
        require_once './Modelo/Conexion.php';
        require_once "./Modelo/Entidades/Estudiante.php";
        require_once "./Modelo/Metodos/EstudianteMetodos.php";

        $estudiante = new Estudiante();
        $estudianteMetodos = new EstudianteMetodos();


        $estudiante->setId($_POST['idInput']);
        $estudiante->setCedula($_POST['nuevoCedula']);
        $estudiante->setNombre($_POST['nuevoNombre']);
        $estudiante->setPrimerApellido($_POST['nuevoPrimerApellido']);
        $estudiante->setSegundoApellido($_POST['nuevoSegundoApellido']);
        $estudiante->setIdEspecialidad($_POST['nuevoIdEspecialidad']);
        $estudiante->setIdSeccion($_POST['nuevoIdSeccion']);

        if($estudianteMetodos->ActualizarEstudiante($estudiante))
            header("Location: ./index.php?controlador=Index&accion=Index");
        else
            header("Location: ./index.php?controlador=Index&accion=Error");
    }

}