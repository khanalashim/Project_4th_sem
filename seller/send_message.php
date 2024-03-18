<?php
// Code to retrieve messages
// Assuming you have a database connection
// Assuming you have a table called 'messages' with columns 'id' and 'message'

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

// Code to handle sending message
if (isset ($_POST['message']) && !empty ($_POST['message'])) {
    // Retrieve the message from the POST request
    $message = $_POST['message'];

    // SQL query to insert the message into the 'messages' table
    $sql = "INSERT INTO messages (message) VALUES ('$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Message is empty!";
}

// Close the database connection
$conn->close();
?>