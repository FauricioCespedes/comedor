<?php
		$head = file_get_contents('./Vista/views/components/Head.php');
		$footer = file_get_contents('./Vista/views/components/Footer.php');

		$fechaHoy = date("d-m-Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<?php echo $head; ?>
    <title>Comedor - Asistencia</title>
</head>
<body>
		<header class="target-background ps-3 shadow-sm">
				<a href="./?dir=admin&controlador=EstadisticasAdmin&accion=Index" class="fs-4 text-dark">
						<i class="fa-solid fa-arrow-left"></i>
				</a>
		</header>
		<main>
				<section class="asistencia-section w-50 mt-4 p-4 rounded bg-light general-shadow mx-auto">
						<span id="fechaHoy" hidden><?php echo date("D-d-M-Y"); ?></span>
						<h1 id="titulo" class="fs-4 text-bold">Asistencia <span id="titulo-fecha" style="color: #333"></span></h1>	
						<label class="form-label mt-3 fs-5" for="cedulaAsistencia">Ingresar cédula</label>
						<input class="form-control mb-4" type="text" id="cedulaAsistencia">
						<button class="btn btn-comedor w-100">Buscar Estudiante</button>
				</section>
		</main>
		<?php echo $footer; ?>
		<script>
				let fechaHoy = document.getElementById('fechaHoy');
				let tituloFecha = document.getElementById('titulo-fecha');
				let nuevaFecha = '';

				let elementosFecha = fechaHoy.textContent.split("-");

				elementosFecha.forEach(e => {
						//Días
						if (e === 'Mon') e = 'Lunes';
						else if(e === 'Tue') e = 'Martes';
						else if(e === 'Wed') e = 'Miércoles';
						else if(e === 'Thu') e = 'Jueves';
						else if(e === 'Fri') e = 'Viernes';

						//Meses
						if (e === 'Jan') e = 'de Enero del';
						else if (e === 'Feb') e = 'de Febrero del';
						else if (e === 'Mar') e = 'de Marzo del';
						else if (e === 'Apr') e = 'de Abril del';
						else if (e === 'May') e = 'de Mayo del';
						else if (e === 'Jun') e = 'de Junio del';
						else if (e === 'Jul') e = 'de Julio del';
						else if (e === 'Aug') e = 'de Agosto del';
						else if (e === 'Sep') e = 'de Septiembre del';
						else if (e === 'Oct') e = 'de Octubre del';
						else if (e === 'Nov') e = 'de Noviembre del';
						else if (e === 'Dec') e = 'de Diciembre del';

						nuevaFecha += ` ${e}`;
				});
				
				tituloFecha.textContent = nuevaFecha;
		</script>
</body>
</html>
