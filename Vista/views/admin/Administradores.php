<?php
		$head = file_get_contents('./Vista/views/components/Head.php');
		$header = file_get_contents('./Vista/views/components/Header.php');
		$sidebar = file_get_contents('./Vista/views/components/MenuAdmin.php');
		$footer = file_get_contents('./Vista/views/components/Footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
		
		<?php echo $head; ?>
    <title>Comedor - Administradores</title>
</head>
<body>
		<?php echo $header; ?>
		<main class="d-flex">
		<?php echo $sidebar; ?>
				<section class="content-section w-75 mx-auto">
						<h1 class="fs-3 mt-2">Administradores</h1> 						
						<table
						id="tableAdministradores"
						data-toggle="table"
						data-height="600"
						data-show-toggle = "true"
						data-pagination="true"
						data-search-align="left"
						data-page-list="[10, 25, 50, 100, all]"
						data-buttons="buttons"
						data-search="true"
						data-url="">
						<thead>
								<tr>
										<th data-checkbox="true"></th>
										<th data-field="name" data-sortable="true">Nombre</th>
										<th data-field="primerapellido" data-sortable="true">Primer Apellido</th>
										<th data-field="segundoapellido" data-sortable="true">Segundo Apellido</th>
										<th data-field="cedula" data-sortable="true">Cedula</th>
										<th data-field="correo" data-sortable="true">Correo</th>
										<th data-field="modificar" class="text-center">Editar</th>
								</tr>
						</thead>
						</table>
				</section>
		</main>

		<?php echo $footer; ?>

		<!-- Modal Crear Administrador -->
		<div class="modal fade" id="crearAdministradorModal" tabindex="-1" aria-labelledby="crearAdministradorModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
						<form action="./?dir=admin&controlador=Administrador&accion=Crear" method="POST">
							<div class="modal-header">
								<h5 class="modal-title" id="crearAdministradorModal">Crear Administrador</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
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
									<label for="correo" class="form-label">Correo</label>
									<input type="email" class="form-control" id="correo" name="correo">
								</div>
								<div class="mb-3">
									<label for="contrasena" class="form-label">Contraseña</label>
									<input type="password" class="form-control" id="contrasena" name="contrasena">
								</div>
							</div>
							<div class="modal-footer d-flex justify-content-between">
								<button type="submit" class="btn btn-primary w-25">Crear</button>
							</div>
						</form>
				</div>
			</div>
		</div>


		<!-- Modal Modificar Administrador -->
		<div class="modal fade" id="modificarAdministradorModal" tabindex="-1" aria-labelledby="modificarAdministradorModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
						<form action="./?dir=admin&controlador=Administrador&accion=Modificar" method="POST">
							<div class="modal-header">
								<h5 class="modal-title" id="modificarAdministradorModal">Modificar Administrador</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="mb-3">
									<input hidden type="text" class="form-control" id="idModificar" name="idModificar">
									<label for="nombre" class="form-label">Nombre</label>
									<input type="text" class="form-control" id="nombreModificar" name="nombreModificar">
								</div>
								<div class="mb-3">
									<label for="primerApellido" class="form-label">Primer Apellido</label>
									<input type="text" class="form-control" id="primerApellidoModificar" name="primerApellidoModificar">
								</div>
								<div class="mb-3">
									<label for="segundoApellido" class="form-label">Segundo Apellido</label>
									<input type="text" class="form-control" id="segundoApellidoModificar" name="segundoApellidoModificar">
								</div>
								<div class="mb-3">
									<label for="cedula" class="form-label">Cédula</label>
									<input type="text" class="form-control" id="cedulaModificar" name="cedulaModificar">
								</div>
								<div class="mb-3">
									<label for="correo" class="form-label">Correo</label>
									<input type="email" class="form-control" id="correoModificar" name="correoModificar">
								</div>
								<div class="mb-3">
									<label for="contrasena" class="form-label">Contraseña</label>
									<input type="password" class="form-control" id="contrasenaModificar" name="contrasenaModificar">
								</div>
							</div>
							<div class="modal-footer d-flex justify-content-between">
								<button type="submit" class="btn btn-primary w-25">Modificar</button>
							</div>
						</form>
				</div>
			</div>
		</div>

		<script>
				const cuerpoTabla = document.getElementById('cuerpoTabla');

				function buttons (){
						return{
								btnCrear:{
										html: '<button title="Crear Administrador" data-bs-toggle="modal" data-bs-target="#crearAdministradorModal" class="btn btn-success"><i class="bi bi-plus-square"></i></button>'		
								},
								btnEliminar:{
										html: '<button onclick="EliminarAdministrador()" title="Eliminar Administrador" id="hola" class="btn" style="background-color: #a61717"><i class="bi bi-trash text-light"></i></button>'		
								}
						}
				}	
				function EliminarAdministradores(){
						let urlIds = "";
						let lengthArray = 0;
						let rutaValida = false;
						for(let i = 0; i < cuerpoTabla.children.length; i++){
								if(cuerpoTabla.children[i].firstElementChild.firstElementChild.firstElementChild.checked){
										urlIds += `&id[]=${cuerpoTabla.children[i].dataset.id}`;
										rutaValida = true;
										lengthArray++;
										
								}
						}
						if(rutaValida){
								let direccionamiento = `./?dir=admin&controlador=Administrador&accion=Eliminar`;
								direccionamiento += urlIds;
								direccionamiento += `&lengthArray=${lengthArray}`;
								location.href = direccionamiento;
						}
				}
				cuerpoTabla.addEventListener('click', (e)=>{
						if(e.target.classList.contains('fa-pen-to-square')){
								let id = e.target.parentElement.parentElement.dataset.id;
								let idModificar = document.getElementById('idModificar');

								idModificar.value = id;
						}
				});
		</script>
</body>
</html>


