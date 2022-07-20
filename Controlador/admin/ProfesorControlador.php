<?php

require_once './Modelo/Conexion.php';
require_once './Modelo/Entidades/Profesor.php';
require_once './Modelo/Metodos/ProfesorMetodos.php';

class ProfesorControlador
{
    public function Index()
    {
				$profesorMetodos = new ProfesorMetodos();
				$todosProfesor = $profesorMetodos->BuscarTodos();
        require_once "./Vista/views/admin/Profesores.php";
    }
    public function Crear()
    {
				$profesorMetodos = new ProfesorMetodos();
				$profesor = new Profesor();

				$nombre = $_POST['nombre'];
				$primerApellido = $_POST['primerApellido'];
				$segundoApellido = $_POST['segundoApellido'];
				$cedula = $_POST['cedula'];
				$saldo = $_POST['saldo'];
				$correo = $_POST['correo'];
				$contrasena = $_POST['contrasena'];

				$profesor->setNombre($nombre);
				$profesor->setPrimerApellido($primerApellido);
				$profesor->setSegundoApellido($segundoApellido);
				$profesor->setCedula($cedula);
				$profesor->setSaldo($saldo);
				$profesor->setCorreo($correo);
				$profesor->setContrasena($contrasena);
				$profesor->setEstado(1);

				if($profesorMetodos->Crear($profesor)){
						header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
				}
				else{
						header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
				}
    }
    public function Modificar()
    {
				$profesor = new Profesor();
				$profesorMetodos = new ProfesorMetodos();

				$id = $_POST['idModificar'];
				$nombre = $_POST['nombreModificar'];
				$primerApellido = $_POST['primerApellidoModificar'];
				$segundoApellido = $_POST['segundoApellidoModificar'];
				$cedula = $_POST['cedulaModificar'];
				$saldo = $_POST['saldoModificar'];
				$correo = $_POST['correoModificar'];
				$contrasena = $_POST['contrasenaModificar'];

				$profesor->setId($id);
				$profesor->setNombre($nombre);
				$profesor->setPrimerApellido($primerApellido);
				$profesor->setSegundoApellido($segundoApellido);
				$profesor->setCedula($cedula);
				$profesor->setSaldo($saldo);
				$profesor->setCorreo($correo);
				$profesor->setContrasena($contrasena);

				if($profesorMetodos->Modificar($profesor)){
						header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
				}
				else{
						header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
				}
    }
    public function Eliminar()
    {
				if(!isset($_REQUEST['id'])){
						header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
				}
				else{
						$arrayIds = $_REQUEST['id'];
						$lengthArray = $_REQUEST['lengthArray'];
						$profesorMetodos = new ProfesorMetodos();
						$volver = false;

						for($i = 0; $i < $lengthArray; $i++){
								$profesor = new Profesor();
								$profesor = $profesorMetodos->Buscar($arrayIds[$i]);
								$profesor->setEstado(0);
								if($profesorMetodos->Modificar($profesor)){
										$volver = true;
								}
						}	

						if($volver){
								header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
						}
						else{
								header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
						}
				}
    }
}

