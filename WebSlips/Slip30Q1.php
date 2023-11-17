<?php
        //dbname = your_db_name
        //password = tybcs or your_db_pass
        //user = tybcs or msgcs or bcs or your_user_name
	$con = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=Golu2898") 
			or die("Connection Faild.");
        
        $c_name = "ascend";
        
        $sql = "SELECT student.stud_id, name, class  
                FROM student, competition, venue 
                WHERE student.stud_id = venue.stud_id
                and competition.c_no = venue.c_no
                and c_name = '$c_name'";
        $res = pg_query($con, $sql);
        
        if($res) {
            echo "<h1 align=center>Selected records are :</h1><br>";
            echo"<table align=center border=2 style='border-collapse: collapse'>";
                echo"<tr> 
                        <td>stud_id</td>
                        <td>name</td>
                        <td>class</td>
                     </tr>";
            
            while($row  = pg_fetch_assoc($res)) {
                echo"<tr> 
                        <td>".$row['stud_id']."</td>".
                        "<td>".$row['name']."</td>".
                        "<td>".$row['class']."</td>".
                     "</tr>";
            }
            echo "</table>";
        }
?>
