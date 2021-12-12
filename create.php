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
			<input maxlength="80" type="text" name="Titel" required="required">
		</div>
			<!-- --> 
		<div class="user-author">
			<label for="user-author">Autor:</label>
			<input maxlength="50" type="text" name="Autor" required="required">
		</div>
			<!-- --> 
		
			<!-- --> 
		<div class="user-textarea">
			<textarea maxlength="2000" name="Text" cols="100" rows="50" required="required"></textarea>
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

		<div class="user-bild">
		<form enctype="multipart/form-data" action="create.php" method="post">
	  	<input type="hidden" name="max_groesse" value="500000"/>
	  	<input type="file" name="file" required="required"/>
	  	<input type="submit" name="upload" value="Hochladen">
		</form>
		</div>
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
            file_put_contents($filename, $content);
			}

			if(isset($_FILE['file'])){

			$PictureType = $_FILES['file']['type'];
			$PicturePath = $_FILES['file']['tmp_name'];

		$PictureName = "Bilder/" . $timeStamp . ".".$PictureType;
		move_uploaded_file($PicturePath['file'], $PictureName);
			
			}
			//header("Refresh:0; url=index.php"); //reload page and make data count
		

	//if(filesize($_FILES['Bild']) > [500000]){
		//die Datei ist zu schwer (zu gross)}
	
		
	?>  
</div>
</body>
</html>