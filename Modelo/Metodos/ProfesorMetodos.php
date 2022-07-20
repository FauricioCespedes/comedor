<?php
class ProfesorMetodos
{
	function Buscar($id)
	{
		$profesor = new Profesor();
		$conexion = new Conexion();

		$sql = "SELECT *  FROM `PROFESOR` WHERE `ID` = '$id'";
		$resultado = $conexion->Ejecutar($sql);

		if (mysqli_num_rows($resultado) > 0) {
			while ($fila = $resultado->fetch_assoc()) {
				$profesor->setId($fila["ID"]);
				$profesor->setNombre($fila["NOMBRE"]);
				$profesor->setPrimerApellido($fila["PRIMERAPELLIDO"]);
				$profesor->setSegundoApellido($fila["SEGUNDOAPELLIDO"]);
				$profesor->setCedula($fila["CEDULA"]);
				$profesor->setSaldo($fila["SALDO"]);
				$profesor->setCorreo($fila["CORREO"]);
				$profesor->setContrasena($fila["CONTRASENA"]);
				$profesor->setEstado($fila["ESTADO"]);
			}
		} else {
			$profesor = null;
		}
		$conexion->Cerrar();
		return $profesor;
	}


	function BuscarTodos()
	{
		$todosProfes = array();
		$conexion = new Conexion();

		$sql = "SELECT * FROM `PROFESOR`";
		$resultado = $conexion->Ejecutar($sql);
		if (mysqli_num_rows($resultado) > 0) {
			while ($fila = $resultado->fetch_assoc()) {
				$profesor = new Profesor();
				$profesor->setId($fila["ID"]);
				$profesor->setNombre($fila["NOMBRE"]);
				$profesor->setPrimerApellido($fila["PRIMERAPELLIDO"]);
				$profesor->setSegundoApellido($fila["SEGUNDOAPELLIDO"]);
				$profesor->setCedula($fila["CEDULA"]);
				$profesor->setSaldo($fila["SALDO"]);
				$profesor->setCorreo($fila["CORREO"]);
				$profesor->setContrasena($fila["CONTRASENA"]);
				$profesor->setEstado($fila["ESTADO"]);
				$todosProfes[] = $profesor;
			}
		} else {
			$todosProfes = null;
		}
		$conexion->Cerrar();
		return $todosProfes;
	}

	function Crear(Profesor $profesor)
	{
		$est = false;
		$conexion = new Conexion();

		$sql = "INSERT INTO `PROFESOR`(`NOMBRE`,`PRIMERAPELLIDO`,`SEGUNDOAPELLIDO`, `CEDULA`,`SALDO`, `CORREO`, `CONTRASENA`, `ESTADO`)
						VALUES('" . $profesor->getNombre() . "',
									'" . $profesor->getPrimerApellido() . "',
									'" . $profesor->getSegundoApellido() . "',
									'" . $profesor->getCedula() . "',
									'" . $profesor->getSaldo() . "',
									'" . $profesor->getCorreo() . "',
									'" . $profesor->getContrasena() . "',
									'" . $profesor->getEstado() . "')";

		if ($conexion->Ejecutar($sql)) {
			$est = true;
		}
		$conexion->Cerrar();
		return $est;
	}

	function Modificar(Profesor $profesor)
	{
		$est = false;
		$conexion = new Conexion();

		$sql = "UPDATE PROFESOR SET NOMBRE='" . $profesor->getNombre() . "',PRIMERAPELLIDO='" . $profesor->getPrimerApellido() . "',SEGUNDOAPELLIDO='" . $profesor->getSegundoApellido() . "',CEDULA='" . $profesor->getCedula() . "',SALDO='" . $profesor->getSaldo() . "',CORREO='" . $profesor->getCorreo() . "',CONTRASENA='" . $profesor->getContrasena() . "',ESTADO='" . $profesor->getEstado() . "'Where `ID` =" . $profesor->getId();

		if ($conexion->Ejecutar($sql)) {
			$est = true;
		}
		$conexion->Cerrar();
		return $est;
	}
}
