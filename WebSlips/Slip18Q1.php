<html>
    <head>
    </head>
    <body>
        <br><br><h1 align=center>Menu</h1><br>
        <form method="post">
        <input type="radio" name="ch" value="a">a. Reverse the order of each element's key-value pair.<br>
        <input type="radio" name="ch" value="b">b. Traverse the element in an array in random order.<br>
        <input type="radio" name="ch" value="c">c. Convert the array element into individual variables.<br>
        <input type="radio" name="ch" value="d">d. Display the elements of array along with key.<br><br>
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
                $res = array_flip($arr);
                print_r($res);
                break;
            case 'b':
                $keys = array_keys($arr);
                shuffle($keys);
                $newArr = array();
                foreach($keys as $key) {
                    $newArr[$key] = $arr[$key];
                }
                print_r($newArr);
                break;
            case 'c':
                $res = extract($arr);
                echo "Sagar = $Sagar<br>";
                echo "Vicky = $Vicky<br>";
                echo "Leena = $Leena<br>";
                echo "Ramesh = $Ramesh<br>";
                break;
            case 'd':
                print_r($arr);
                break;
        }
    }
?>