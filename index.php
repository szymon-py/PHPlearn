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
// $age = 0;
// $adult = true;
// if ($age >= 18) {
//     echo "You may enter this site";
// } elseif ($age <= 0) {
//     echo "Not a valid age";
// } else {
//     echo "You must be 18+ to enter";
// }

// $hours = 50;
// $rate = 15;
// $weekly_pay = null;


// if ($hours <= 0) {
//     $weekly_pay = 0;
// } elseif ($hours <= 40) {
//     $weekly_pay = $hours * $rate;
// } else {
//     $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
// }

// echo "Salary: \${$weekly_pay}"

// $temp = 25;
// $cloudy = true;

// if ($temp >= 0 && $temp <= 30) {
//     echo "The wether is good <br>";
// } else {
//     echo "The wether is bad <br>";
// }

// if ($cloudy) {
//     echo "It's cloudy";
// } else {
//     echo "It's sunny";
// }

$age = 18;
$citizen = true;

if ($age >= 18 && $citizen) {
    echo "You can vote";
} else {
    echo "Sorry you cant vote";
}

?>