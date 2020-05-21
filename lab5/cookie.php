<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<body>
	<?php 
		require_once("funkcje.php");

		if (isset($_GET["utworzCookie"])) {
			$czas = $_GET["czas"];
			setcookie("nazwa", "wartość", time() + $czas, "/");
			echo "Utworzono ciasteczko. Mniam!";
		} 
	?>

	<p><a href="index.php">Wstecz</a>
	
	</body>
</html>