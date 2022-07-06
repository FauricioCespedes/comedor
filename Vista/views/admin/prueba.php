<!DOCTYPE html>
<html lang="en">
<head>
		<?php
				$head = file_get_contents('./Vista/views/components/Head.php');
				echo $head;
		?>
    <title></title>
</head>
<body class="min-vh-100">
		<main>
		<?php
				$menu = file_get_contents('./vista/views/components/MenuAdmin.php');
				echo $menu;
		?> 
		</main>
</body>
</html>
