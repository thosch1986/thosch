<?php
    include("dbconnect.php");
    
    $abfrage = "SELECT * FROM links";
    $abfrageErgebnis = mysql_query($abfrage);
    echo "<table>";
    while($row = mysql_fetch_object($abfrageErgebnis)) {
        echo "<tr>";
        echo "<td>" . $row->url . "</td>";
        echo "<td>" . $row->name . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo $abfrage . "<br>";
?>
