<?php
		$head = file_get_contents('./Vista/views/components/Head.php');
		$header = file_get_contents('./Vista/views/components/Header.php');
		$sidebar = file_get_contents('./Vista/views/components/MenuAdmin.php');
		$footer = file_get_contents('./Vista/views/components/Footer.php');

		if(isset($_REQUEST['estados'])) $estado = 0;
		else $estado = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<?php echo $head; ?>
    <title>Comedor - Profesores</title>
</head>
<body>
		<?php echo $header; ?>
		<main class="d-flex">
		<?php echo $sidebar; ?>
				<section class="content-section w-75 mx-auto">
						<h1 class="fs-3 mt-2">
								<?php if($estado == 1) echo 'Profesores'; else echo 'Profesores Eliminados' ?>
						</h1> 						
						<table
						id = "tableProfesores"
						data-toggle = "table"
						data-height = "600"
						data-show-toggle = "true"
						data-pagination = "true"
						data-search-align = "left"
						data-page-list = "[10, 25, 50, 100, all]"
						data-buttons = "buttons"
						data-search = "true"
						data-url = "">
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
														if($profesor->getEstado() == $estado){
																$idTemp = $profesor->getId();
																$nombreTemp = $profesor->getNombre();
																$primerAp = $profesor->getPrimerApellido();
																$segundoAp = $profesor->getSegundoApellido();
																$cedula = $profesor->getCedula();
																$saldo = $profesor->getSaldo();
																$correo = $profesor->getCorreo();
								?>
										<tr data-id="<?php echo $idTemp; ?>">
										<td></td>
										<td><?php echo $nombreTemp ?></td>
										<td><?php echo $primerAp ?></td>
										<td><?php echo $segundoAp ?></td>
										<td><?php echo $cedula ?></td>
										<td><?php echo $saldo ?></td>
										<td><?php echo $correo ?></td>
										<td class="text-center"><i onclick="ModificarProfesores('<?php echo $idTemp; ?>', '<?php echo $nombreTemp ?>', '<?php echo $primerAp ?>', '<?php echo $segundoAp ?>', '<?php echo $cedula ?>', '<?php echo $saldo ?>', '<?php echo $correo ?>')" class="fa-solid fa-pen-to-square" style="font-size: 1.2rem; cursor: pointer;"></i></td>	
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

		<!-- Modal Modificar Profesores -->
		<div class="modal fade" id="modificarProfesorModal" tabindex="-1" aria-labelledby="modificarProfesorModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
						<form action="./?dir=admin&controlador=Profesor&accion=Modificar" method="POST">
							<div class="modal-header">
								<h5 class="modal-title" id="modificarProfesorModal">Modificar Profesor</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="mb-3">
									<input hidden type="text" class="form-control" id="idModificar" name="idModificar">
									<input hidden type="text" class="form-control" id="estadoModificar" name="estadoModificar">
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
									<label for="saldo" class="form-label">Saldo (Colones)</label>
									<input type="text" class="form-control" value="0" id="saldoModificar" name="saldoModificar">
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

		<?php 
		if($estado == 1){
		?>
				<script>
						function buttons (){
								return{
										btnCrear:{
												html: '<button onclick="CrearProfesores()" title="Crear Profesor" class="btn btn-success"><i class="bi bi-plus-square"></i></button>'		
										},
										btnEliminar:{
												html: '<button onclick="CambiarEstado(0)" title="Eliminar Profesor" class="btn" style="background-color: #a61717"><i class="bi bi-trash text-light"></i></button>'		
										},
										btnVerInactivos:{
												html: '<button onclick="verInactivos()" title="Ver eliminados" class="btn btn-primary text-light"><i class="bi bi-person-x"></i></button>'		
										}
								}
						}	
				</script>
		<?php
		}
		else{
		?>
				<script>
						function buttons (){
								return{
										btnActivar:{
												html: '<button onclick="CambiarEstado(1)" title="Activar Profesor" class="btn btn-primary"><i class="bi bi-heart"></i></button>'		
										},
										btnVerActivos:{
												html: '<button onclick="verActivos()" title="Ver Activos" class="btn btn-success"><i class="bi bi-person-check"></i></button>'		
										}
								}
						}	
				</script>
		<?php
		}
		?>

		<script>
				const cuerpoTabla = document.getElementById('cuerpoTabla');

				function verActivos(){
						location.href = "./?dir=admin&controlador=Profesor&accion=Index&id=main";
				}
				function verInactivos(){
						location.href = "./?dir=admin&controlador=Profesor&accion=Index&id=main&estados=0";
				}

				function CrearProfesores(){
						location.href = "./?dir=admin&controlador=Profesor&accion=Index&id=crear";
				}

				function ModificarProfesores(id, nombre, primerap, segundoap, cedula, saldo, correo){
						location.href = `./?dir=admin&controlador=Profesor&accion=Index&id=modificar&idU=${id}&nombre=${nombre}&primerap=${primerap}&segundoap=${segundoap}&cedula=${cedula}&saldo=${saldo}&correo=${correo}`;
				}

				function CambiarEstado(estado){
						let urlIds = "";
						let lengthArray = 0;
						let rutaValida = false;
						for(let i = 0; i < cuerpoTabla.children.length; i++){
								if(cuerpoTabla.children[i].firstElementChild.firstElementChild.firstElementChild.checked){
										urlIds += `&idsArr[]=${cuerpoTabla.children[i].dataset.id}`;
										rutaValida = true;
										lengthArray++;
								}
						}
						if(rutaValida){
								let direccionamiento = `./?dir=admin&controlador=Profesor&accion=CambiarEstado&id=${estado}`;
								direccionamiento += urlIds;
								direccionamiento += `&lengthArray=${lengthArray}`;
								location.href = direccionamiento;
						}
				}
		</script>
</body>
</html>
