<!DOCTYPE html>
<html lang="en">
<body>
<?php
session_start();//for handel the submissions use session

if(!isset($_SESSION['stack'])) {
    $_SESSION['stack'] = [];
}

function push($item) {
    array_push($_SESSION['stack'], $item);
}

function pop() {
    if (empty($_SESSION['stack'])) {
        echo "Stack is empty.";
    } else {
        return array_pop($_SESSION['stack']);
    }
}

function displayStack() {
    if (empty($_SESSION['stack'])) {
        echo "Stack is empty.";
    } else {
        echo "Stack: " . implode(' ', $_SESSION['stack']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $option = $_POST['option'];

    switch ($option) {
        case 'push':
            $item = $_POST['item'];
            push($item);
            echo "$item is inserted.";
            break;

        case 'pop':
            $poppedItem = pop();
            if ($poppedItem !== null) {
                echo "$poppedItem is deleted.";
            }
            break;

        case 'display':
            displayStack();
            break;
    }
}
?>

<form method="post">
    <h2>Queue Program</h2>
    <label for="option">Choose an operation:</label>
    <select name="option" id="option">
        <option value="push">Push</option>
        <option value="pop">Pop</option>
        <option value="display">Display Stack</option>
    </select>

    <div id="itemInput">
        <label for="item">Enter item:</label>
        <input type="text" name="item" id="item">
    </div>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
