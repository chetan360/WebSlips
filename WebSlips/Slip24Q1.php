<?php
    $f1 = $_POST['f1'];
    $f2 = $_POST['f2'];
    
    if(!file_exists($f1)) {
        exit("Error: File not exist.");
    }
    
    $content = file_get_contents($f1);
    
    file_put_contents($f2, $content, FILE_APPEND);
    
    echo "Contents of $f1 are appended to $f2 successfully.";
?>

    

