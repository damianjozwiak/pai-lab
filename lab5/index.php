<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<body>
		<?php
			require("funkcje.php");			

			if(isset($_POST["wyloguj"])) {
				$_SESSION["zalogowany"] = 0;
			}

			echo "<H1>Nasz system</H1>";
		?>

		<p><a href="user.php">Przejdź do strony użytkownika</a></p>
		
		<form action="logowanie.php" method="post">
			Login: <input type="text" name="login"><br>
			Hasło: <input type="text" name="haslo"><br>
			<input type="submit" name="zaloguj" value="Zaloguj">
		</form>

		<form action="cookie.php" method="get">
			Czas: <input type="number" name="czas"><br>
			<input type="submit" name="utworzCookie" value="Utwórz">
		</form>

		<?php
			if (isSet($_COOKIE["nazwa"])) {
				echo "</br></br>Zawartość pliku cookie: " . $_COOKIE["nazwa"];
			}
		?>

	</body>
</html>