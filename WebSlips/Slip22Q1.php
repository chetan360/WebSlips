<!DOCTYPE html>
<html lang="en">
<body>
<?php
session_start();//for handel the submissions use session

if(!isset($_SESSION['queue'])) {
    $_SESSION['queue'] = [];
}

function enqueue($item) {
    array_push($_SESSION['queue'], $item);
}

function dequeue() {
    if (empty($_SESSION['queue'])) {
        echo "Queue is empty.";
    } else {
        return array_shift($_SESSION['queue']);
    }
}

function displayQueue() {
    if (empty($_SESSION['queue'])) {
        echo "Queue is empty.";
    } else {
        echo "Queue: " . implode(' ', $_SESSION['queue']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $option = $_POST['option'];

    switch ($option) {
        case 'enqueue':
            $item = $_POST['item'];
            enqueue($item);
            echo "$item is inserted.";
            break;

        case 'dequeue':
            $dequeuedItem = dequeue();
            if ($dequeuedItem !== null) {
                echo "$dequeuedItem is deleted.";
            }
            break;

        case 'display':
            displayQueue();
            break;
    }
}
?>

<form method="post">
    <h2>Queue Program</h2>
    <label for="option">Choose an operation:</label>
    <select name="option" id="option">
        <option value="enqueue">Enqueue</option>
        <option value="dequeue">Dequeue</option>
        <option value="display">Display Queue</option>
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
