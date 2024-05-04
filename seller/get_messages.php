<?php
// Code to retrieve messages
// Assuming you have a database connection
// Assuming you have a table called 'messages' with columns 'id' and 'message'

include "../sahafront/db.php";
// Example code to fetch messages
$messages = array(); // Array to hold messages
// Execute your SQL query to fetch messages, you might want to limit the number of messages fetched
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $messages[] = $row['message'];
    }
}

// For demonstration, let's just create some example messages
// $messages[] = "Hello!";
// $messages[] = "How are you?";
// $messages[] = "This is a simple messaging system.";

// Output messages as HTML
foreach ($messages as $msg) {
    echo "<div>$msg</div>";
}
?>