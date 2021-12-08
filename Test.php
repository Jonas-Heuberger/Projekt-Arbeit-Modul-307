<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="zurAuswertung.php" method="post" autocomplete="off">
      <div class="form-box">
        <label for="salutation">Anrede</label>
        <div class="select">
            <select name="salutation" id="salutation">
              <option value="">Bitte wählen</option>
              <option value="male">Herr</option>
              <option value="female">Frau</option>
            </select>
        </div>
      </div>
      <div class="form-box">
          <label for="firstname">Vorname</label>
          <input type="text" id="firstname" name="firstname"> 
      </div>
      <div class="form-box">
        <label for="lastname">Nachname</label>
        <input type="text" id="lastname" name="lastname"> 
      </div>
      <div class="form-box">
        <label for="email">Email</label>
        <input type="email" id="email" name="email"> 
      </div>
      <div class="form-box">
        <label for="passwort">Passwort</label>
        <input type="password" id="passwort" name="passwort"> 
      </div>
      <div class="form-box">
        <label for="passwortRepeat">Passwort wiederholen</label>
        <input type="password" id="PasswortRepeat" name="PasswortRepeat"> 
      </div>
      <div class="form-box">
        <input type="checkbox" id="agb" name="agb"> 
        <label for="agb">Hiermit bestätige ich die AGB's</label>
      </div>
      <div class="form-box">
        <button type="submit">Los geht's</button>
      </div>
    </div>
    </form>



<?php
if(isset($_POST['submit'])) {              // Testen, ob das Formular geschickt wurde
	$file= $_FILES['file'];                // superglobaler ARRAY $_FILES
	//print_r($file); 
	// ---alle wichtigen Variablen aus dem superglobalen Array herauslesen ---------------
	$fileName= $_FILES['file']['name'];    // davon 'Name’
	$fileTmpName= $_FILES['file']['tmp_name']; // davon 'temporärer Name', damit getestet werden kann$fileGroesse= $_FILES['file']['size']; // davon 'Datei-Grösse'
	$fileFehler= $_FILES['file']['error']; // davon 'Fehler'
	$fileTyp= $_FILES['file']['type'];     // davon 'Typ'
	
	//-------Vorbereitung der Datei-Endung
	$fileArt= explode('.',$fileName); // Art des Dateinamens nach dem Komma in Array extrahieren$fileActualExt= strtolower(end($fileArt)); // im letzten Array-Teil wird alles kleingeschrieben
	
	$erlaubt = array('jpg','jpeg','png','pdf');// alles Bildarten?

    //----------------Prüfen auf verschiedene Kriterien: ----------------------------------    
    if(in_array($fileActualExt,$erlaubt)) {            // der File-Typ ist erlaubt
      if($fileFehler=== 0) {                           // Keine Fehlermeldung von PHP
        if($fileGroesse< 10000000) {                   // nur bis 1'000'000 Bytes Grösse


	      //----------------jetzt ist alles geprüft, es wird der UPLOAD vorbereitet: ------
	      $fileZiel= 'uploads/'.$fileNameNeu;          // hierher soll verschoben werden

	      //----------------jetzt wird die Datei hochgeladen, wenn alle Kriterien erfüllt:
	      move_uploaded_file($fileTmpName, $fileZiel); // jetzt wird die angegebene Datei verschoben
	      header("Location: index.php?uploadsuccess"); // zurück in die Startposition
	      //-------------------------------------------------------------------------------
	    } else {
	      echo "Datei ist zu gross";
	    }
      } else { 
        echo "Es gab ein Fehler beim Hochladen der Datei";
      }
    } else {
      echo "Diese Art von Datei kann nicht hochgeladen werden";
    } 
  }  // Testen, ob das Formular geschickt wurde
?>

</body>
</html>