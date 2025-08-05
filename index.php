<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
$grade = "G";

switch ($grade) {
    case "A":
        echo "you did great";
        break;
    case "B":
        echo "you did good";
        break;
    case "C":
        echo "you did okej";
        break;
    case "D":
        echo "you did bad";
        break;
    case "F":
        echo "you failed";
        break;
    default:
        echo "Not valid";
        break;
}

?>