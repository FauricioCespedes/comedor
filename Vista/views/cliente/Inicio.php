<?php
		$head = file_get_contents('./Vista/views/components/Head.php');
		$header = file_get_contents('./Vista/views/components/Header.php');
		$sidebar = file_get_contents('./Vista/views/components/MenuCliente.php');
		$footer = file_get_contents('./Vista/views/components/Footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<?php echo $head; ?>
    <title>Comedor - Inicio</title>
</head>
<body>
		<?php echo $header; ?>
		<main class="d-flex">
		<?php echo $sidebar; ?>
				<section class="content-section">
						
				</section>
		</main>
		<?php echo $footer; ?>
</body>
</html>


