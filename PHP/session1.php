<?php 
	session_start();
	$username = "Maximilian";
	$_SESSION["Username"] = $username;
	$_SESSION["berechtigter_User"] = 1;
	echo "Hallo " . $username . ".<br>Du hast hiermit die Session aktiviert.<br>";
	echo "Zum überpruefen auf <a href='session2.php'>session2.php</a> klicken.";
?>