<?php
	setlocale(LC_TIME, "de_DE");
	echo "Heute ist ";
	echo strftime("%A");
	echo ".<br>";
	
	$tage = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
	$tag = date("w");
	echo $tage[$tag], "<br>";
	
	$monate = array(1=>"Januar",
									2=>"Februar",
									3=>"M&auml;rz",
									4=>"April",
									5=>"Mai",
									6=>"Juni",
									7=>"Juli",
									8=>"August",
									9=>"September",
									10=>"Oktober",
									11=>"November",
									12=>"Dezember");
	$monat = date("n");
	echo $monate[$monat];
?>