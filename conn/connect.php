<?php
// $servername = "localhost";
// $username = "uwdijqhctvmlz";
// $password = "xn--12c9dast7db4m.live";
// $database = "dbbkziamrs6fd1";

$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
if (!$conn) {
    printf("Errormessage: %s\n", $mysqli->error);
}

