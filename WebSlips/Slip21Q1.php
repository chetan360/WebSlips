<?php
    $temp = array(18,19,20,21,22,23,24,25,26,27,28,29,30,31,32);
    
    $avg = array_sum($temp)/15;
    
    $warmest = array_slice($temp, -5, 5);
    
    echo "<h1 align=center>Weather Stats<br><br></h1>";
    echo "Average temperature = $avg<br>";
    echo "<br>Five warmest temperatuters:<br>";
    echo "<p>".implode(', ', $warmest)."</p>";
?>