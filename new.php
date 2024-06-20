<?php

$servername = "127.0.0.1";
$username = "u124361664_hero";
$password = "Ashimak@123";
$database = "u124361664_mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "noice";
?>