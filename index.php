<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>radius in cm: </label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form><br>
</body>

</html>
<?php
$radius = $_POST["radius"];
$circumference = null;

$circumference = round((2 * pi() * $radius), 2);
$area = round(pi() * pow($radius, 2), 2);
$volue = round(4 / 3 * pi() * pow($radius, 3), 2);

echo "Circumference is: {$circumference}cm <br>";
echo "Area is: {$area}cm^2 <br>";
echo "Volue is: {$volue}cm^3 <br>";
?>