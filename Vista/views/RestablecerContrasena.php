<!DOCTYPE html>
<html lang="en">
	<head>
			<?php
					$head = file_get_contents('./Vista/views/components/Head.php');
					echo $head;
			?>
		<title>Restablecer Contraseña</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body class="text-center">
		<main class="form-signin w-100 m-auto">
        	<div class="container">
           		<div class="row d-flex justify-content-center my-5">
                	<aside class="col-sm-4 my-5">
                    	<div class="card">
                        	<article class="card-body">
								<img class="card-img-top" src="https://covao.ed.cr/wp-content/uploads/2022/03/logo-covao-sin_slogan.png">
								<h4 class="card-title mb-4 mt-1">¿Olvidaste tu contraseña?</h4>
								<p class="card-text">Pronto se enviará un correo electrónico al correo ingresado para que pueda cambiar su contraseña</p>
								<form action="#">
                                	<div class="form-group">
                                    	<h5>Ingrese su correo</h5>
                                    	<br>
                                    	<div class="form-floating mb-3">
											<input type="email" class="form-control" id="floatingInput" style="border-radius:15px ;">
											<label for="floatingInput">Correo</label>
										</div>
                                   
                                	</div>
                                	<div>
                                    	<p>
											<br>
											<div class="d-flex justify-content-between">
												<a href="#" class="btn btn-outline-danger">Cancelar</a>
												<a href="#" class="btn btn-outline-success">Aceptar</a>
											</div>
                                    	</p>
                                	</div>

                            	</form>
                        	</article>

                   		</div>
					</aside>

            	</div>
			</div>
    	</main>

	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
