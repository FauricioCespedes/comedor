<!DOCTYPE html>
<html lang="en">
<head>
		<?php
				$head = file_get_contents('./Vista/views/components/Head.php');
				echo $head;
		?>
    <title>Login</title>
</head>
<body>

		<?php
				$hd = file_get_contents('./Vista/views/components/Header.php');
				echo $hd;
		?>
		<?php
				$had = file_get_contents('./Vista/views/components/MenuAdmin.php');
				echo $had;
		?>
</body>
</html>
