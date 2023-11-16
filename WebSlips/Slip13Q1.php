<<html>
    <head>
        <title>Chess Board</title>
        <style>
            table {
                border-collapse: collapse;
            }
            
            td {
                width: 50px;
                height: 50px;
                border: 1px solid;
            }
            
            .black {
                background-color: black;
            }
            
            .white {
                background-color: white;
            }
        </style>
    </head>
    <body>
        <table>
            <?php 
                $row = 8;
                $col = 8;
                
                for($i=1; $i<=$row; $i++) {
                    echo "<tr>";
                    for($j=1; $j<=$col; $j++) {
                        $cel = ($i + $j)%2 === 0? 'black': 'white';
                        echo "<td class='$cel'></td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
