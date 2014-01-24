<?php
	$empfaenger = "mail@thorstenschmidt.net";
	$absenderVorname = "Thorsten";
	$absenderNachname = "Schmidt";
	$absenderName = $absenderVorname . " " . $absenderNachname;
	$absenderMail = "thorsten.schmidt@effectlab.de";
	$betreff = "PHP ist toll!";
	$body = "Hallo Claudia!<br>
	$absenderName war <span style='color: #ff0000';>gerade</span> auf deinen PHP-Seiten und hat sich gefreut.
	Du kannst ihn unter $absenderMail kontaktieren.";
	$header = "From: $absenderName <$absenderMail>\n";
	$header .= "Content-Type: text/html\n";
	$header .= "Content-Transfer-Encoding: 8bit\n";
	mail($empfaenger, $betreff, $body, $header);
?>