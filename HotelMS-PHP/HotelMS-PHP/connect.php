<?php
$host = "localhost";
$user = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "hotelms"; // Replace with your database name

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
