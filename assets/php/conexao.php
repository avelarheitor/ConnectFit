<?php
$servername = "localhost";
$database = "connectfitbd";
$username = "connectfit01";
$password = "senha01";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
