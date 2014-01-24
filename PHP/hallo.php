<?php
	echo "Hello World!<br>";
	print "Hello World2!<br>";
	echo "Hello \"World!\"<br>";
	echo "C:\\windows<br>";
	$uhrzeit = "17:48 Uhr";
	echo "Anton fuhr um ", $uhrzeit, " nach Wien, wo er um ", $uhrzeit, " ankam.<br>";
	echo "Anton fuhr um $uhrzeit nach Wien, wo er um $uhrzeit ankam.<br>";
	$anton = "Anton fuhr um ";
	$wien = " nach Wien, wo er um ";
	$ankommen = "ankam.";
	echo "$anton$uhrzeit$wien$uhrzeit $ankommen<br>";
	
	$text = "Heute ist";
	$text .= " Montag!";
	echo $text;
	$kompletterSatz = $anton.$uhrzeit.$wien.$uhrzeit." ".$ankommen;
?>