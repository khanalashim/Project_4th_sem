<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}
$id = $_GET['delete_id'];
$status = 'f';

$query1 = "SELECT * FROM bookings Where id=$id";
$result1 = $conn->query($query1);

$query2 = "UPDATE bookings SET status='$status' WHERE id=$id";
$result2 = $conn->query($query2);

header('location: track_bookings.php');
?>