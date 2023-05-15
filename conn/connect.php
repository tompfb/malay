<?php
$servername = "localhost";
$username = "ucqb8ncnazxxo";
$password = "xn--y3cbblhx6cwgwe.cam";
$database = "dbbsuyhulcae2x";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "blog";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
if (!$conn) {
    printf("Errormessage: %s\n", $mysqli->error);
}

