<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>x: </label>
        <input type="text" name="x"><br>
        <label>y: </label>
        <input type="text" name="y">
        <input type="submit" name="total">

    </form>
</body>

</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$total = null;

//$total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
$total = pow($x, $y);

echo $total
?>