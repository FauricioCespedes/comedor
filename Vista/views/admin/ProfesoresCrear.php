<?php
		$head = file_get_contents('./Vista/views/components/Head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $head; ?>
	<title>Crear Profesor</title>
</head>
<body>
  <div class="w-50 mx-auto target-background my-4 rounded mobile-target overflow-hidden">
			<div id="navbar-container">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-end">
						<li data-page="manual" class="page-item page-link text-center w-50 rounded-top" style="cursor: pointer; user-select: none">
						  <i class="bi bi-ui-radios"></i>
							Manual		
						</li>
						<li data-page="excel" class="page-item page-link text-center w-50 rounded-top" style="cursor: pointer; user-select: none">
							<i class="bi bi-file-earmark-spreadsheet-fill"></i>
							Excel
						</li>
					</ul>
				</nav>
		  </div>
			<form id="manualForm" action="./?dir=admin&controlador=Profesor&accion=Crear" method="POST" class="px-4 pb-4">
				<h1 class="fs-2">Nuevo Profesor</h1>
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
				<button class="btn btn-primary" type="submit">Crear</button>
			</form>
		  <form class="d-none px-4 pb-4" id="excelForm">
				<h1 class="fs-2 mb-0">Ingresar Profesores</h1>
				<div class="mb-4 mt-3">
					<label for="formFileLg" class="form-label">Ingrese un archivo de excel con los profesores</label>
					<input id="file" name="file" type="file" accept=".xlsx" class="form-control " id="formFileLg" placeholder="asdf">
				</div>
				<button id="enviarExcel" type="submit" class="btn btn-primary">Enviar</button>
		  </form>
  </div>
  <script>
		const navbarContainer = document.getElementById('navbar-container');
		const manualForm = document.getElementById('manualForm');
		const excelForm = document.getElementById('excelForm');

		navbarContainer.addEventListener('click', (e)=>{
				if(e.target.dataset.page == "manual"){
						manualForm.classList.remove("d-none");
						excelForm.classList.add("d-none");
				}
				else{
						manualForm.classList.add("d-none");
						excelForm.classList.remove("d-none");
				}
		});

		const enviarExcel = document.getElementById('enviarExcel');
		const file = document.getElementById('file');
		enviarExcel.addEventListener('click', (e)=>{
				e.preventDefault();
				console.log(file.files[0].name);

				var XLSX = require("xlsx");
				var workbook = XLSX.readFile(file.files[0].name);

		});
	</script>
</body>
</html>
