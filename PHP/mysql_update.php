<?php
    include("dbconnect.php");
    
    $aendern = "UPDATE links SET urlname = 'PHP für dich', url = 'http://www.schattenbaum.net/php' WHERE id = '4'";
    
    $update = mysql_query($aendern);
?>
