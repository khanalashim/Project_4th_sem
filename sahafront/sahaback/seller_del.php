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

$query = "DELETE FROM seller Where s_id=$id";
$result = $conn->query($query);


header("location: sellers.php");

?>