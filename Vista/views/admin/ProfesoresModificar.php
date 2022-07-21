<?php
		$head = file_get_contents('./Vista/views/components/Head.php');
		$id = $_REQUEST['idU'];
		$nombre = $_REQUEST['nombre'];
		$primerAp = $_REQUEST['primerap'];
		$segundoAp = $_REQUEST['segundoap'];
		$cedula = $_REQUEST['cedula'];
		$saldo = $_REQUEST['saldo'];
		$correo = $_REQUEST['correo'];
		$estado = $_REQUEST['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $head; ?>
	<title>Modificar Profesor</title>
</head>
<body>
	<form action="./?dir=admin&controlador=Profesor&accion=Modificar" method="POST" class="w-50 mx-auto target-background p-4 my-4 rounded mobile-target">
			<h1 class="fs-2">Modificar Profesor</h1>
				<div class="mb-3">
				<input value="<?php echo $id; ?>" hidden type="text" class="form-control" id="idModificar" name="idModificar">
				<input value="<?php echo $estado; ?>" hidden type="text" class="form-control" id="estadoModificar" name="estadoModificar">
					<label for="nombre" class="form-label">Nombre</label>
					<input value="<?php echo $nombre; ?>" type="text" class="form-control" id="nombreModificar" name="nombreModificar">
				</div>
				<div class="mb-3">
					<label for="primerApellido" class="form-label">Primer Apellido</label>
					<input value="<?php echo $primerAp; ?>" type="text" class="form-control" id="primerApellidoModificar" name="primerApellidoModificar">
				</div>
				<div class="mb-3">
					<label for="segundoApellido" class="form-label">Segundo Apellido</label>
					<input value="<?php echo $segundoAp; ?>" type="text" class="form-control" id="segundoApellidoModificar" name="segundoApellidoModificar">
				</div>
				<div class="mb-3">
					<label for="cedula" class="form-label">Cédula</label>
					<input value="<?php echo $cedula; ?>" type="text" class="form-control" id="cedulaModificar" name="cedulaModificar">
				</div>
				<div class="mb-3">
					<label for="saldo" class="form-label">Saldo (Colones)</label>
					<input value="<?php echo $saldo; ?>" type="text" class="form-control" value="0" id="saldoModificar" name="saldoModificar">
				</div>
				<div class="mb-3">
					<label for="correo" class="form-label">Correo</label>
					<input value="<?php echo $correo; ?>" type="email" class="form-control" id="correoModificar" name="correoModificar">
				</div>
				<div class="mb-3">
					<label for="contrasena" class="form-label">Contraseña</label>
					<input value="" type="password" class="form-control" id="contrasenaModificar" name="contrasenaModificar">
				</div>
				<button type="submit" class="btn btn-primary">Modificar</button>
	</form>
</body>
</html>
