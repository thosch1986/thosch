<?php
  session_start();
	$_SESSION = array();
	session_destroy();
	
	echo "Die Session wurde soeben erfolgreich deaktiviert.<br>";
	echo "Die Session kannst du unter <a href='session1.php'>session1.php</a> wieder aktiveren.<br>";
	echo "Und/oder unter <a href='session2.php'>session2.php</a> die Auswirkungen testen.";
?>