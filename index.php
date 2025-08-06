<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="radio" value="Visa" name="credit_card">
        Visa <br>
        <input type="radio" value="MasterCard" name="credit_card">
        MasterCard <br>
        <input type="radio" value="AmericanExpress" name="credit_card">
        AmericanExpress <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>
<?php
if (isset($_POST["confirm"])) {
    $credit_card = null;

    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
    }
    switch ($credit_card) {
        case "Visa":
            echo "You selected Visa";
            break;
        case "MasterCard":
            echo "You selected MasterCard";
            break;
        case "AmericanExpress":
            echo "You selected AmericanExpress";
            break;
        default:
            echo "Please make a selection";
    }
}

?>