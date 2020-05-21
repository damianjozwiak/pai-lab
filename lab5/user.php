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
		
		if (!isSet($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] == 0) {
			header("Location: index.php");
		}

		$x = $_SESSION["zalogowanyImie"];

		echo "$x<br>";
		echo "Zalogowano";

		if (isSet($_POST["przeslij"])) {
			$currentDir = getcwd();
			$uploadDirectory = "/img/";
			$fileName = $_FILES["myfile"]["name"];
			$fileSize = $_FILES["myfile"]["size"];
			$fileTmpName = $_FILES["myfile"]["tmp_name"];
			$fileType = $_FILES["myfile"]["type"];
			if ($fileName != "" and
				($fileType == "image/png" or $fileType == "image/PNG"))
			{
				$uploadPath = $currentDir . $uploadDirectory . $fileName;
				if (move_uploaded_file($fileTmpName, $uploadPath))
					echo "</br>Zdjęcie zostało załadowane</br>";
			}
		}
	?>

	<form action="user.php" method="POST" enctype"multipart/form-data">
		<input name="imgfile" type="file">
	</form>

	<img src="./img/piesek.png" alt="Tutaj będzie twoje zdjęcie">

	<p><a href="index.php">Wróć do strony głównej</a></p>

	<form action="index.php" method="post">
		<input type="submit" name="wyloguj" value="Wyloguj">
	</form>

</body>
</html>