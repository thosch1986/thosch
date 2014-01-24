<?php
	$timestamp = time();
	$datum = date("d.m.Y", $timestamp);
	$uhrzeit = date("H:i:s", $timestamp);
	$wochentag = date("w", $timestamp);
	
	switch($wochentag) {
		case("1"):
			$wochentag = "Montag";
			break;
		case("2"):
			$wochentag = "Dienstag";
			break;
		case("3"):
			$wochentag = "Mittwoch";
			break;
		case("4"):
			$wochentag = "Donnerstag";
			break;
		case("5"):
			$wochentag = "Freitag";
			break;
		case("6"):
			$wochentag = "Samstag";
			break;
		case("7"):
			$wochentag = "Sonntag";
			break;
		default:
			$wochentag = "KACKE";
			break;
	}
	
	echo $timestamp . "<br>";
	echo $datum, ", ", $uhrzeit, "Uhr, ", $wochentag;
?>