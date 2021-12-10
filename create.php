<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<title>Erstellen</title>
</head>
<body>
	<div class="grid">

		<div>
			<header>
				<ul>
			<li> <a href="create.php">Erstellen</a></li>
			<li ><a href="edit.php">Bearbeiten</a></li>
			<li ><a href="index.php">News</a></li>
			
			</ul>
				</header>
		</div>
	<div class="form-create">
		<form action="create.php" method="Post">

		<div class="user-titel">
			<label for="user-titel">Titel:</label>
			<input type="text" name="Titel">
		</div>

		<div class="user-author">
			<label for="user-author">Author:</label>
			<input type="text" name="Author">
		</div>

		<div class="user-bild">
			<label for="user-bild">Bild:</label>
			<input type="file" name="Picture">
		</div>

		<div class="user-textarea">
			<textarea name="Text" cols="100" rows="50"></textarea>
		</div>

		<div class="submit">
			<input type="button" value="Abbrechen">
			<input type="submit" value="Senden" name="submit">
		</div>
		</form>
</div>
<!--Logic for Formula-->
	<?php
		if(isset($_POST['submit'])){

			$ttl = htmlspecialchars($_POST['Titel']);
			$txt = htmlspecialchars($_POST['Text']);
			$atr = htmlspecialchars($_POST['Author']);
			$pic = htmlspecialchars($_POST['Picture']);

			$timeStamp = $_SERVER['REQUEST_TIME'];  //gmdate("d m y g:i a", $_SERVER['REQUEST_TIME']);

			$filename= "files/".$timeStamp.".txt";
			$content= $ttl." | ".$txt." | ".$atr." | ".$pic;
			file_put_contents($filename, $content);

			header("Refresh:0; url=index.php"); //reload page and make data count
		}      
	?>  
</div>
</body>
</html>