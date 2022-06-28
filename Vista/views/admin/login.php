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
				$header = file_get_contents('./Vista/views/components/Header.php');
				echo $header;
		?>
</body>
</html>
