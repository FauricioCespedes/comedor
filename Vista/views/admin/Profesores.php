<?php
		$head = file_get_contents('./Vista/views/components/Head.php');
		$header = file_get_contents('./Vista/views/components/Header.php');
		$sidebar = file_get_contents('./Vista/views/components/MenuAdmin.php');
		$footer = file_get_contents('./Vista/views/components/Footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!-- <style>
				.fixed-table-toolbar > div {position: relative; z-index: -1;}
				.fixed-table-toolbar:active > div {z-index: 0;}
		</style> -->
		<?php echo $head; ?>
    <title>Comedor - Profesores</title>
</head>
<body>
		<?php echo $header; ?>
		<main class="d-flex">
		<?php echo $sidebar; ?>
				<section class="content-section w-75 mx-auto">
						<h1 class="fs-3 mt-2">Profesores</h1> 						
						<table
						id="tableProfesores"
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
										<th data-field="saldo">Saldo</th>
										<th data-field="correo" data-sortable="true">Correo</th>
										<th data-field="modificar" class="text-center">Editar</th>
								</tr>
						</thead>
						<tbody id="cuerpoTabla">
								<?php
					  				if($todosProfesor != null){
												foreach($todosProfesor as $profesor){
														if($profesor->getEstado() == 1){
								?>
								<tr data-id="<?php echo $profesor->getId(); ?>">
										<td></td>
										<td><?php echo $profesor->getNombre(); ?></td>
										<td><?php echo $profesor->getPrimerApellido(); ?></td>
										<td><?php echo $profesor->getSegundoApellido(); ?></td>
										<td><?php echo $profesor->getCedula(); ?></td>
										<td><?php echo $profesor->getSaldo(); ?></td>
										<td><?php echo $profesor->getCorreo(); ?></td>
										<td class="text-center"><i class="fa-solid fa-pen-to-square" style="font-size: 1.2rem; cursor: pointer;"></i></td>	
								</tr>
								<?php
														}
												}
										}	
								?>
						</tbody>
						</table>
				</section>
		</main>

		<?php echo $footer; ?>

		<!-- Modal Crear Profesores -->
		<div class="modal fade" id="crearProfesorModal" tabindex="-1" aria-labelledby="crearProfesorModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
						<form action="./?dir=admin&controlador=Profesor&accion=Crear" method="POST">
							<div class="modal-header">
								<h5 class="modal-title" id="crearProfesorModal">Crear Profesor</h5>
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
							</div>
							<div class="modal-footer d-flex justify-content-between">
								<button type="submit" class="btn btn-primary w-25">Crear</button>
							</div>
						</form>
				</div>
			</div>
		</div>

		<script>
				function buttons (){
						return{
								btnCrear:{
										html: '<button title="Crear Profesor" data-bs-toggle="modal" data-bs-target="#crearProfesorModal" class="btn btn-success"><i class="bi bi-plus-square"></i></button>'		
								},
								btnEliminar:{
										html: '<button onclick="EliminarProfesores()" title="Eliminar Profesor" id="hola" class="btn" style="background-color: #a61717"><i class="bi bi-trash text-light"></i></button>'		
								}
						}
				}	
				function EliminarProfesores(){
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
								let direccionamiento = `./?dir=admin&controlador=Profesor&accion=Eliminar`;
								direccionamiento += urlIds;
								direccionamiento += `&lengthArray=${lengthArray}`;
								location.href = direccionamiento;
						}
				}
		</script>
</body>
</html>

