<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Select food you like</label> <br>
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="foods[]" value="Burger">
        Burger <br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog <br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    $foods = $_POST["foods"];

    foreach ($foods as $food) {
        echo $food . "<br>";
    }
}
?>