<?php
	$blumen = array("Rose", "Tulpe", "Nelke", "Sonnenblume");
	
	echo $blumen[2];
	array_push($blumen, "Butterblume");
	echo "<br>";
	echo count($blumen);
	echo "<br>";
	if(in_array("Butterblume", $blumen)) {
		echo "Butterblume ist im Array vorhanden.<br>";
	}
	
	rsort($blumen);
	foreach($blumen as $meine_blumen) {
		echo $meine_blumen, "<br>";
	}
?>