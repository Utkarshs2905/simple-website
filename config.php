<?php
$host = "RDS-ENDPOINT-HERE";
$user = "admin";
$password = "password";
$database = "simple_app";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
