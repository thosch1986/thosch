<?php 
    include 'dbconnect.php';
    
    $haustier = $_POST["Haustier"];
    $read = mysql_query("SELECT * FROM haustierwunsch WHERE haustier = '$haustier'");
    $datensatz = mysql_fetch_object($read);
    
    $haustieranzahl = $datensatz->count;
    $haustieranzahl++;
    
    $update = mysql_query("UPDATE haustierwunsch SET count = '$haustieranzahl' WHERE haustier = '$haustier'");
    
    echo "Danke, dass du abgestimmt hast.<br />";
    echo "<br />";
    echo "<a href='umfrage_ergebnis_grafisch.php'>Hier</a> kannst du das Ergebnis begutachten.";
?>
