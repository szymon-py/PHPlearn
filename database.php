<?php
$db_server = "localhost";
$user = "root";
$pass = "";
$db_name = "businessdb";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $user, $pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "not conntected <br>";
}
