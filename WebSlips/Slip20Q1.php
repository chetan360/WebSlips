<html>
    <head>
    </head>
    <body>
        <br><br><h1 align=center>Menu</h1><br>
        <form method="post">
        <input type="radio" name="ch" value="a">a. Split an array into chunks.<br>
        <input type="radio" name="ch" value="b">b. Sort the array by values without changing the keys.<br>
        <input type="radio" name="ch" value="c">c. Filter the even elements from array.<br><br>
        <button type="text">Submit</button>
        </form>
        
    </body>
</html>
<?php
    $arr = array("Sagar"=>"31", "Vicky"=>"41", "Leena"=>"39", "Ramesh"=>"40");
    print_r($arr);
    echo "<br><br><h1>Result:</h1><br>";
    if(isset($_POST['ch'])) {
        $ch = $_POST['ch'];
        switch($ch) {
            case 'a':
                $n = 2;
                $chunks = array_chunk($arr, $n);
                echo "Chunks:<br>";
                print_r($chunks);
                break;
            case 'b':
                asort($arr);
                print_r($arr);
                break;
            case 'c':
                $evenElts = array_filter($arr, function ($value) {
                    return $value % 2 == 0; 
                });
                print_r($evenElts);
                break;
        }
    }
?>