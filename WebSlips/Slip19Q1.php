<?php
    $sentence = $_POST['sentence'];
    $word = $_POST['word'];
    $ch = $_POST['ch'];
    
    switch ($ch) {
        case 1:
            $start = 4;
            $n = 3;
            $sentence = substr_replace($sentence, "", $start, $n);
            echo $sentence;
            break;
        case 2:
            $start = 4;
            $n = 3;
            $sentence = substr_replace($sentence, $word, $start, 0);
            echo $sentence;
            break;
        case 3:
            $start = 2;
            $n = 2;
            $sentence = substr_replace($sentence, $word, $start, $n);
            echo $sentence;
            break;
    }
?>