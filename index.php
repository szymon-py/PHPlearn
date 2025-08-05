<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter a number to count to:</label><br>
        <input type="text" name="counterup"><br>
        <label>Enter a number to count down from:</label><br>
        <input type="text" name="counterdown"><br>
        <input type="submit" value="start">
    </form>
</body>

</html>
<?php
// for ($i = 10; $i > 0; $i--) {
//     echo $i . "<br>";
// }

$counterup = $_POST["counterup"];
$counterdown = $_POST["counterdown"];

for ($i = 1; $i <= $counterup; $i++) {
    echo $i . "<br>";
}

for ($i = $counterdown; $i > 0; $i--) {
    echo $i . "<br>";
}
?>