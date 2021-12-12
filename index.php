<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- verlinkung der CSS Datei --> 
	<link rel="stylesheet" href="CSS/style.css">

	<!-- importieren von der Schriftart Roboto von Google fonts --> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<title>News</title>
	
</head>
<body>
	
	<div class="grid">
		<div class="navigation">
		<header>
		<ul>
			<li> <a href="create.php">Erstellen</a></li>
			<li ><a href="index.php">News</a></li> 
		</ul>
			</header>
		</div>

		<div class="Schlagzeilen">
				<h1>Schlagzeilen</h1>
		</div>
			
		<div class="Inhalt">
			
				<?php
				
				foreach(glob("Artikel/*.txt") as $filename) {
							 ?>  <?php
							 //code
				$inhalt= file_get_contents($filename);
                $artikelInhalt = explode(" | ", $inhalt);
                $Titel= htmlspecialchars($artikelInhalt[0]);
				$Autor = htmlspecialchars($artikelInhalt[1]); 
				$Text = htmlspecialchars($artikelInhalt[2]);
				echo $Titel."<br>"."<br>";
				echo "von ".$Autor."<br>"."<br>";
				echo $Text."<br>"."<br>";
					?>	<a href="edit.php">Edit</a></br></br>		 
							 <?php
						 }
					   ?>
		</div>
	</div>
</body>
</html>