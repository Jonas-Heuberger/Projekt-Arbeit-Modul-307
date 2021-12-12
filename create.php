<!DOCTYPE html> <!-- --> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<title>Erstellen</title>
</head>
<body>
	<div class="grid">

		<div>
			<!-- --> 
			<header>
				<ul>
			<li> <a href="create.php">Erstellen</a></li>
			<li ><a href="edit.php">Bearbeiten</a></li>
			<li ><a href="index.php">News</a></li>
			
			</ul>
				</header>
		</div>

		<!-- --> 
	<div class="form-create">
		<form action="create.php" method="Post">
		<!-- --> 
		<div class="user-titel">
			<label for="user-titel">Titel:</label>
			<input type="text" name="Titel" required="required">
		</div>
			<!-- --> 
		<div class="user-author">
			<label for="user-author">Autor:</label>
			<input type="text" name="Autor" required="required">
		</div>
			<!-- --> 
		<div class="user-bild">
			<label for="user-bild">Bild:</label>
			<input type="file" name="Bild" required="required">
		</div>
			<!-- --> 
		<div class="user-textarea">
			<textarea name="Text" cols="100" rows="50" required="required"></textarea>
		</div>
		<!-- --> 
		<div class="submit">
			
		<!-- --> 
			<a href="index.php">
			<input type="button" value="Abbrechen">
			</a>
			<!-- --> 
			<input type="submit" value="Senden" name="submit">
		</div>
		</form>
</div>
<!--Formular Inhalt in Textdatei speichern-->
	<?php
		if(isset($_POST['submit'])){
			
			$Titel = htmlspecialchars($_POST['Titel']);
			$Text = htmlspecialchars($_POST['Text']);
			$Autor = htmlspecialchars($_POST['Autor']);

			$timeStamp = $_SERVER['REQUEST_TIME'];  //gmdate("d m y g:i a", $_SERVER['REQUEST_TIME']);

			$filename= "Artikel/".$timeStamp.".txt";
			$content= $Titel . " | " . $Autor . " | ". $Text;

			/*
			$Bild = $_FILES['Bild']['tmp_name'];
			$timeStamp = $_SERVER['REQUEST_TIME'];  //gmdate("d m y g:i a", $_SERVER['REQUEST_TIME']);
			$BildName = "Bilder/".$timeStamp.".jpg";
			file_put_contents($BildName, $Bild);
			*/

			file_put_contents($filename, $content);

				$Bild = $_FILES['Bild'];
				$timeStamp = $_SERVER['REQUEST_TIME']; 
				$PictureName = "Bilder/".$timeStamp."jpg";
				file_put_contents($PictureName, $Bild);
			  }


			/*
			

			$PictureName = $_FILES['Bild']['name'];
			$PictureSize = $_FILES['Bild']['size'];
			
			$timeStamp = $_SERVER['REQUEST_TIME']; 
			*/

			

			//header("Refresh:0; url=index.php"); //reload page and make data count
		

	//if(filesize($_FILES['Bild']) > [500000]){
		//die Datei ist zu schwer (zu gross)}
	
		
	?>  
</div>
</body>
</html>