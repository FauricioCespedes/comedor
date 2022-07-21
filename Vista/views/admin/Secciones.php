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
    <title>Comedor - Secciones</title>
</head>
<body>
		<?php echo $header; ?>
		<main class="d-flex">
		<?php echo $sidebar; ?>
				<section class="content-section">
				<h1 class="fs-3 mt-2">Secciones</h1> 						
					<table
						id="tableSecciones"
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
								<th data-field="name" data-sortable="true">Sección</th>
								<th data-field="modificar" class="text-center">Editar</th>
							</tr>
						</thead>
					</table>
				</section>
		</main>
		<?php echo $footer; ?>
		<script>
				const cuerpoTabla = document.getElementById('cuerpoTabla');

				function buttons (){
						return{
								btnCrear:{
										html: '<button onclick="CrearProfesores() "title="Crear Profesor" class="btn btn-success"><i class="bi bi-plus-square"></i></button>'		
								},
								btnEliminar:{
										html: '<button onclick="EliminarProfesores()" title="Eliminar Profesor" id="hola" class="btn" style="background-color: #a61717"><i class="bi bi-trash text-light"></i></button>'		
								}
						}
				}	
		</script>
</body>
</html>

