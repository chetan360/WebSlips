<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $ch = $_POST['ch'];
    
    switch ($ch) {
        case 1:
            $mod = fmod($n1, $n2);
            echo $n1 ."%".$n2."=".$mod;
            break;
        case 2:
            $pow = pow($n2, $n1);
            echo $n2 ."^".$n1."=".$pow;
            break;
        case 3:
            $sum = 0;
            for($i=1; $i<=$n1; $i++) {
                $sum += $i;
            }
            echo "Sum = ".$sum;
            break;
        case 4:
            $f = 1;
            $n = $n2;
            While($n > 1) {
                $f *= $n--;
            }
            echo "Factorial = ".$f;
            break;
    }
?>
