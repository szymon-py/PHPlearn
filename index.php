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
$date = date("l");


switch ($date) {
    case "Monday":
        echo "Ugh, it's Monday again 😩. Coffee, anyone?";
        break;
    case "Tuesday":
        echo "Hey, at least it's not Monday!";
        break;
    case "Wensday":
        echo "It's Hump Day 🐪 — halfway to the weekend!";
        break;
    case "Thursday":
        echo "Almost there... Friday is waving 👋";
        break;
    case "Friday":
        echo "Friday vibes! Time to pretend to work 😎";
        break;
    case "Saturday":
        echo "Weekend mode: ON 🎉 Sleep in, chill out.";
        break;
    case "Sunday":
        echo "Sunday scaries incoming 😬. Relax while you can.";
        break;
    default:
        echo "You are not from the earth 🌎";
}

?>