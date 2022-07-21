<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$head = file_get_contents('./Vista/views/components/Head.php');
	echo $head;
	?>
	<title>Login</title>
</head>
<body class="text-center">
	<div class="container">
		<div class="pt-5">
			<div class="shadow p-3 mb-5 bg-white rounded">
				<div class="row row-cols-2">
					<div class="col">
						<div class="p-5">
							<img class="card-img" src="https://garajedelrock.com/wp-content/uploads/2020/10/E367CDA2-0B84-4C80-B36A-A58A0D0ADD51-600x400.jpeg">
							<!--Aquí va la imagen que gusten poner al lado, como el ejemplo de figma-->
						</div>
					</div>
					<div class="col">
						<div class="p-5">
							<img class="card-img-top" src="https://covao.ed.cr/wp-content/uploads/2022/03/logo-covao-sin_slogan.png">
							<div class="pt-5">
								<form method="post" action="./?controlador=Index&accion=Login">
									<div class="mb-3">
                                        <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
									<div class="mb-3">
                                        <input type="password" class="form-control" name="contrasena" id="exampleInputPassword1">
                                    </div>
									<button type="submit" class="btn btn-secondary">Aceptar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>