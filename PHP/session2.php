<?php
	session_start();
	
	echo "Hallo ", $_SESSION["Username"],"!<br>";
	
	if($_SESSION["berechtigter_User"] != 1) {
		echo "Bitte logge dich zuerst ein!<br>";
		echo "Hierzu die Session wieder unter <a href='session1.php'>session1.php</a> aktivieren.";
	} else {
		echo "Du bist eingeloggt. Dies ist der Inhalt der Seite.<br>";
		echo "Die Session kannst du unter <a href='session3.php'>session3.php</a> deaktivieren.";
	}
	
?>