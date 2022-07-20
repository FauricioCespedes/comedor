<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form class="">
		<div class="mb-3">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre">
		</div>
		<div class="mb-3">
			<label for="primerApellido" class="form-label">Primer Apellido</label>
			<input type="text" class="form-control" id="primerApellido" name="primerApellido">
		</div>
		<div class="mb-3">
			<label for="segundoApellido" class="form-label">Segundo Apellido</label>
			<input type="text" class="form-control" id="segundoApellido" name="segundoApellido">
		</div>
		<div class="mb-3">
			<label for="cedula" class="form-label">Cédula</label>
			<input type="text" class="form-control" id="cedula" name="cedula">
		</div>
		<div class="mb-3">
			<label for="saldo" class="form-label">Saldo (Colones)</label>
			<input type="text" class="form-control" value="0" id="saldo" name="saldo">
		</div>
		<div class="mb-3">
			<label for="correo" class="form-label">Correo</label>
			<input type="email" class="form-control" id="correo" name="correo">
		</div>
		<div class="mb-3">
			<label for="contrasena" class="form-label">Contraseña</label>
			<input type="password" class="form-control" id="contrasena" name="contrasena">
		</div>
		<button class="btn btn-primary" type="submit">Enviar</button>
	</form>
</body>
</html>
