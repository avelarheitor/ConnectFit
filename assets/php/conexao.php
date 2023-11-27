<?php
$servername = "localhost";
$database = "connectfitbd";
$username = "connectfit01";
$password = "senha01";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
