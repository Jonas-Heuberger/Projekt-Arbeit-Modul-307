<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<title>Document</title>
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
		<form action="index.php" method="Post">

		<div class="user-titel">
			<label for="user-titel">Titel:</label>
			<input type="text" name="cTitel">
		</div>

		<div class="user-author">
			<label for="user-author">Author:</label>
			<input type="text" name="cAuthor">
		</div>

		<div class="user-bild">
			<label for="user-bild">Bild:</label>
			<input type="file" name="cPicture">
		</div>

		<div class="user-textarea">
			<textarea name="Text" cols="100" rows="50"></textarea>
		</div>

		<div class="submit">
			<input type="button" value="Abbrechen">
			<input type="submit" value="Ändern">	
		</div>
		</form>
</div>

</div>
</body>
</html>