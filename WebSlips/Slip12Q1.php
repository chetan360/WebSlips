<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $ch = $_POST['ch'];
    
    function calculate($n1, $n2, $ch, $Cal= true) {
        if($Cal) {
            switch ($ch) {
                case 1:
                    return $n1 + $n2;
                case 2:
                    return  $n1 - $n2;
                case 3:
                    return $n1 * $n2;
                case 4:
                    return $n1 / $n2;
            }
        }
    }
    
    $res = calculate($n1, $n2, $ch);
    
    echo "<html>
            <body>
                <h1> Result = $res</h1>
            </body>
          </html>";
?>
