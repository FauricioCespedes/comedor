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
						data-mobile-responsive= "true"
						data-check-on-init= "true"
						data-search="true"
						data-url="">
						<thead>
								<tr>
										<th data-checkbox="true" data-sortable="true"></th>
										<th data-field="name" data-sortable="true">Nombre</th>
										<th data-field="primerapellido data-sortable="true"">Apellidos</th>
										<th data-field="cedula data-sortable="true"">Cedula</th>
										<th data-field="saldo data-sortable="true"">Saldo</th>
										<th data-field="modificar data-sortable="true"">Editar</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<td></td>
										<td>Pepe</td>
										<td>Castro</td>
										<td>40555</td>
										<td>$1234</td>
										<td>boton</td>
								</tr>
								<tr>
										<td></td>
										<td>Juan</td>
										<td>Castro</td>
										<td>30555</td>
										<td>$1234</td>
										<td>boton</td>
								</tr>
						</tbody>
						</table>
				</section>
		</main>
		<?php echo $footer; ?>
		<script>
				function buttons (){
						return{
								btnCrear: {
										text: 'Crear Pofesor',
										icon: 'bi-plus-circle',
										event: function () {
												location.href = './?';
										},
										attributes: {
											title: 'Crear Profesor',
										  style: 'background-color: #5e931a;'
										}
								},
								btnEliminar: {
										text: 'Eliminar Profesor',
										icon: 'bi-trash',
										event: function () {
												location.href = './?';
										},
										attributes: {
											title: 'Eliminar Profesor',
										  style: 'background-color: #a61717;'
										}
								}
						}
				}	
		</script>
</body>
</html>

