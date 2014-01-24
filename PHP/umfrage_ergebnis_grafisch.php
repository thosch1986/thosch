<?php 
    include 'dbconnect.php';
    
    $abfrage1 = mysql_query("SELECT count FROM haustierwunsch WHERE id = '1'");
    $ergebnis1 = mysql_fetch_object($abfrage1);
    $katzenwunsch = $ergebnis1->count;
    
    $abfrage2 = mysql_query("SELECT count FROM haustierwunsch WHERE id = '2'");
    $ergebnis2 = mysql_fetch_object($abfrage2);
    $hundewunsch = $ergebnis2->count;
    
    $abfrage3 = mysql_query("SELECT count FROM haustierwunsch WHERE id = '3'");
    $ergebnis3 = mysql_fetch_object($abfrage3);
    $nagerwunsch = $ergebnis3->count;
    
    $abfrage4 = mysql_query("SELECT count FROM haustierwunsch WHERE id = '4'");
    $ergebnis4 = mysql_fetch_object($abfrage4);
    $sonstigerwunsch = $ergebnis4->count;
    
    $gesamt = $katzenwunsch + $hundewunsch + $nagerwunsch + $sonstigerwunsch;
    $katzenprozent = $katzenwunsch * 100 / $gesamt;
    $hundeprozent = $hundewunsch * 100 / $gesamt;
    $nagerprozent = $nagerwunsch * 100 / $gesamt;
    $sonstprozent = $sonstigerwunsch * 100 / $gesamt;
    
    $katzenbalken = $katzenprozent * 3;
    $hundebalken = $hundeprozent * 3;
    $nagerbalken = $nagerprozent * 3;
    $sonstbalken = $sonstprozent * 3;
?>
<table>
  <tr>
    <td>Katzen</td>
    <td><img src="pixel.gif" width="<?php echo $katzenbalken; ?>" height="10" alt="<?php echo $katzenprozent; ?> %" /></td>
    <td><?php echo round($katzenprozent,2); ?> %</td>
    <td><?php echo $katzenwunsch; ?> mal</td>
  </tr>
  <tr>
    <td>Hunde</td>
    <td><img src="pixel.gif" width="<?php echo $hundebalken; ?>" height="10" alt="<?php echo $hundeprozent; ?> %" /></td>
    <td><?php echo round($hundeprozent,2); ?> %</td>
    <td><?php echo $hundewunsch; ?> mal</td>
    </tr>
  <tr>
    <td>Nager</td>
    <td><img src="pixel.gif" width="<?php echo $nagerbalken; ?>" height="10" alt="<?php echo $nagerprozent; ?> %" /></td>
    <td><?php echo round($nagerprozent,2); ?> %</td>
    <td><?php echo $nagerwunsch; ?> mal</td>
  </tr>
  <tr>
    <td>Sonstiges</td>
    <td><img src="pixel.gif" width="<?php echo $sonstbalken; ?>" height="10" alt="<?php echo $sonstprozent; ?> %" /></td>
    <td><?php echo round($sonstprozent,2); ?> %</td>
    <td><?php echo $sonstigerwunsch; ?> mal</td>
  </tr>
</table>
<?php
    echo "<br />";
    echo "<a href='umfrage.php'>Hier</a> kannst du erneut abstimmen.";
?>
