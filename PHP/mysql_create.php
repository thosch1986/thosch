<?php
    include("dbconnect.php");
    
    $url = $_POST["url"];
    $hpname = $_POST["hpname"];
    $name = $_POST["name"];
    $banner = $_POST["banner"];
    $beschreibung = $_POST["beschreibung"];
    
    $eintrag = "INSERT INTO links (url, urlname, name, banner, beschreibung) 
        VALUES ('$url','$hpname','$name','$banner', '$beschreibung')";
    
    $eintragen = mysql_query($eintrag);
?>
