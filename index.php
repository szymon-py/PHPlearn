<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
<form action="" method="post">
    username: <input type="text" name="username" placeholder="Enter your name"><br>
    age: <input type="text" name="age"><br>
    email: <input type="email" name="age"><br>
    <input type="submit" value="login" name="login">
</form>

</html>
<?php
if (isset($_POST["login"])) {
    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST, "eamil", FILTER_SANITIZE_EMAIL);
    // echo "you are {$age} old";

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    if (empty($age)) {
        echo "That number wanst valid";
    } else {
        echo "you are {$age} age old";
    }
}
?>