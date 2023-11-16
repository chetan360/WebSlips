<?php
    $str = $_POST['str'];
    $ch = $_POST['ch'];
    
    switch ($ch) {
        case 1:
             $substr = substr($str, 0, 5);
            echo $substr;
            break;
        case 2:
            $smstr = strtolower($str);
            $titlestr = ucwords($smstr);
            echo $titlestr;
            break;
        case 3:
            $padstr = "*".$str."*";
            echo $padstr;
            break;
        case 4:
            $removestr = ltrim($str);
            echo $removestr;
            break;
        case 5:
            $revstr = strrev($str);
            echo $revstr;
            break;
    }
?>
