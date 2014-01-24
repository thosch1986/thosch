<?php
    include("dbconnect.php");
    
    $loeschen = "DELETE FROM links WHERE id = '3'";
    
    $loeschAnfrage = mysql_query($loeschen);
?>
