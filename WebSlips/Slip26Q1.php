<?php
        //dbname = your_db_name
        //password = your_db_pass
        //user = tybcs or msgcs or bcs or your_user_name
	$con = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=Golu2898") 
			or die("Connection Faild.");
        
        $hname = "abhinandan";
        
        $sql = "SELECT doctor.doc_no, hospital.hosp_no, dname, hname
                FROM doctor, hospital
                WHERE doctor.doc_no = hospital.doc_no
                and hname = '$hname'";
        $res = pg_query($con, $sql);
        
        if($res) {
            echo "<h1 align=center>Selected records are :</h1><br>";
            echo"<table align=center border=2 style='border-collapse: collapse'>";
                echo"<tr> 
                        <td>doc_no</td>
                        <td>dname</td>
                        <td>hosp_no</td>
                        <td>hname</td>
                     </tr>";
            
            while($row  = pg_fetch_assoc($res)) {
                echo"<tr> 
                        <td>".$row['doc_no']."</td>".
                        "<td>".$row['dname']."</td>".
                        "<td>".$row['hosp_no']."</td>".
                        "<td>".$row['hname']."</td>".
                     "</tr>";
            }
            echo "</table>";
        }
?>
