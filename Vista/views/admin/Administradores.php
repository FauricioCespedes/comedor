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
		<main>
		<?php echo $sidebar; ?>
		administradores	
		</main>
		<?php echo $footer; ?>
</body>
</html>
