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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process form data here
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];

    $id = $_GET['edit_id'];
    $query2 = "UPDATE bookings SET fromdate='$fromdate', todate='$todate' WHERE id='$id'";
    $result1 = $conn->query($query2);
}
header("location: bookings.php");

$conn->close();
?>