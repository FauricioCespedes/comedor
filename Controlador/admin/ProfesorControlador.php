<?php

require_once './Modelo/Conexion.php';
require_once './Modelo/Entidades/Profesor.php';
require_once './Modelo/Metodos/ProfesorMetodos.php';

class ProfesorControlador
{
    public function Index($vista)
    {
				if($vista == "main"){
						$profesorMetodos = new ProfesorMetodos();
						$todosProfesor = $profesorMetodos->BuscarTodos();
						require_once "./Vista/views/admin/Profesores.php";
				}
				else if($vista == "crear")
						require_once "./Vista/views/admin/ProfesoresCrear.php";
				else if($vista == "modificar")
						require_once "./Vista/views/admin/ProfesoresModificar.php";
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
				$estado = $_POST['estadoModificar'];

				$profesor->setId($id);
				$profesor->setNombre($nombre);
				$profesor->setPrimerApellido($primerApellido);
				$profesor->setSegundoApellido($segundoApellido);
				$profesor->setCedula($cedula);
				$profesor->setSaldo($saldo);
				$profesor->setCorreo($correo);
				$profesor->setContrasena($contrasena);
				$profesor->setEstado($estado);
				

				if($profesorMetodos->Modificar($profesor)){
						header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
				}
				else{
						header('Location: ./?dir=admin&controlador=Profesor&accion=Index');
				}
    }
    public function CambiarEstado($estado)
    {
				if(!isset($_REQUEST['idsArr'])){
						header('Location: ./?dir=admin&controlador=Profesor&accion=Index&id=main');
				}
				else{
						$arrayIds = $_REQUEST['idsArr'];
						$lengthArray = $_REQUEST['lengthArray'];
						$profesorMetodos = new ProfesorMetodos();
						$volver = false;

						for($i = 0; $i < $lengthArray; $i++){
								$profesor = new Profesor();
								$profesor = $profesorMetodos->Buscar($arrayIds[$i]);
								$profesor->setEstado($estado);
								if($profesorMetodos->Modificar($profesor)){
										$volver = true;
								}
						}	

						if($estado == 0){
								if($volver){
										header('Location: ./?dir=admin&controlador=Profesor&accion=Index&id=main');
								}
								else{
										header('Location: ./?dir=admin&controlador=Profesor&accion=Index&id=main');
								}
						}
						else{
								if($volver){
										header('Location: ./?dir=admin&controlador=Profesor&accion=Index&id=main&estados=0');
								}
								else{
										header('Location: ./?dir=admin&controlador=Profesor&accion=Index&id=main&estados=0');
								}
						}
				}
    }
}

