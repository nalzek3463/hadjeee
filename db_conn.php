<?php

$servername = "localhost";
$username = "nala";
$password = "nala123";
$dbname = "autotarget";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    echo "Connection Failed";
}
?>