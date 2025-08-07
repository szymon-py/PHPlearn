<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username
        <input type="text" name="username"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
// if (isset($_POST["submit"])) {
//     echo "{$key} = {$value} <br>";
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "HELLO <br>";
}

$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("pizza123", $hash)) {
    echo "you are logged in <br>";
} else {
    echo "incorrect password";
}

?>