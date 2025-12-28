<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "User added successfully <br>";
    echo "<a href='index.php'>Go Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
