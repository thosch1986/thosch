<?php
	$text = "PHP setzt viele \"Sonderzeichen\" ein,\nda gewissen Zeichen in PHP\neine spezielle Bedeutung haben.";
	$text = str_replace("spezielle","besondere", $text);
	$text = nl2br($text);
	$text = stripslashes($text);
	echo $text;
?>