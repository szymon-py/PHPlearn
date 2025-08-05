<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit" value="search">
    </form>
</body>

</html>
<?php
// $foods = array("apple", "bannana", "orange");

// // array_push($foods, "pineapple", "kiwi");
// // array_pop($foods);
// // array_shift($foods);
// $foods = array_reverse($foods);
// echo count($foods) . "<br>";

// foreach ($foods as $food) {
//     echo $food . "<br>";
// }


// associative arrays

$capitals = array(
    "Poland" => "Warsaw",
    "USA" => "Washington D.C",
    "Japan" => "Kyoto",
    "Germany" => "Berlin"
);

// $capitals["Poland"] = "Cracow";
// $capitals["China"] = "Beijing";


// foreach ($capitals as $key => $value) {
//     echo $value . " = " .  $key . "<br>";
// }


$capital = $capitals[$_POST["country"]];

echo $capital;
?>