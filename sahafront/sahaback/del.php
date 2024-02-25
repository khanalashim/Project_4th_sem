<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['delete_id'];

$query1 = "SELECT * FROM users Where id=$id";
$result1 = $conn->query($query1);
while ($row = $result1->fetch_assoc()) {
    if (unlink($row['destination'])) {
        echo 'The file is deleted';
    } else {
        echo 'There was an error';
    }
}
$query = "DELETE FROM users Where id=$id";
$result = $conn->query($query);


include "index.php";

?>