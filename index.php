<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <p>Enter X and Y</p>
        <input type="number" name="x" placeholder="X">
        <input type="number" name="y" placeholder="Y">
        <br>
        <input type="radio" name="operation" value="add"> Add
        <input type="radio" name="operation" value="subtract"> Subtract
        <input type="radio" name="operation" value="multiply"> Multiply
        <input type="radio" name="operation" value="divide"> Divide
        <br>
        <button type="submit">Submit</button>
</body>

</html>

<?php


if (isset($_GET['x']) && isset($_GET['y']) && isset($_GET['operation'])) {
    $x = (int) $_GET['x'];
    $y = (int) $_GET['y'];
    $op = $_GET['operation'];

    switch ($op) {
        case 'add':
            $result = $x + $y;
            break;
        case 'subtract':
            $result = $x - $y;
            break;
        case 'multiply':
            $result = $x * $y;
            break;
        case 'divide':
            $result = $y != 0 ? $x / $y : "Division by zero!";
            break;
        default:
            $result = "Unknown operation";
    }

    echo "<p> Result: $result</p>";
}
