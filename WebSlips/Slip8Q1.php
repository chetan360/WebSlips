<?php
    $smStr= $_POST['str1'];
    $lgStr = $_POST['str2'];
    $ch = $_POST['ch'];
    
    switch ($ch) {
        case 1:
            $start = strpos($lgStr, $smStr) === 0?"Yes": "No";
             echo $start;
            break;
        case 2:
            $pos = strpos($lgStr, $smStr);
            echo $pos;
            break;
        case 3:
            $n = 6;
            $cmp = strncasecmp($smStr, $lgStr, $n) === 0? "Yes": "No";
            echo $cmp;
            break;
    }
?>
