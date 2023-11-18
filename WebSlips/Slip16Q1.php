<?php
    $srno = $_POST['srno'];
    $name = $_POST['name'];
    $marks = $_POST['marks'];
    
    $arr = explode(",", $marks);
    
    $total = array_sum($arr);
    
    $per = $total/5;
    
    function grade($per) {
        if($per > 70) {
            return 'A';
        } else if($per > 60) {
            return 'B';
        } else if($per > 50) {
            return 'C';
        } else if($per > 40) {
            return 'D';
        } else {
            return 'F';
        }
    }
    
    $grade = grade($per);
    
    echo "<h1 align=center>Result</h1><br>";
    
    echo "<table border=1 align=center style='border-collapse: collapse;'>
            <tr>
                <th>srno</th>
                <th>name</th>
                <th>total</th>
                <th>per</th>
                <th>grade</th>
            </tr>
            <tr>
                <td>$srno</td>
                <td>$name</td>
                <td>$total</td>
                <td>$per</td>
                <td>$grade</td>
            </tr>
         </table>";
?>