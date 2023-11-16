<?php
    $str = $_POST['str'];
    $ch = $_POST['ch'];
    $separator = $_POST['separator'];
    
    switch ($ch) {
        case 1:
            //words array
            $words = explode($separator, $str);
            print_r($words);
            break;
        case 2:
            $newStr = str_replace($separator, "|", $str);
            echo $newStr;
            break;
        case 3:
            //last word of word array
            $words = explode($separator, $str);
            $last = end($words);
            echo $last;
            break;
    }
?>
