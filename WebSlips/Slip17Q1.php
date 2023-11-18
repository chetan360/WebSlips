<?php
    $arr = array("Sagar"=>"31", "Vicky"=>"41", "Leena"=>"39", "Ramesh"=>"40");
    print_r($arr);
    
    echo "<br><br>Ascending order by value:<br>";
    asort($arr);
    print_r($arr);
    
    echo "<br><br>Ascending order by key:<br>";
    ksort($arr);
    print_r($arr);
    
    echo "<br><br>Descending order by value:<br>";
    arsort($arr);
    print_r($arr);
    
    echo "<br><br>Descending order by key:<br>";
    krsort($arr);
    print_r($arr);
?>