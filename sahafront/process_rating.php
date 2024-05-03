<?php
session_start();
include "db.php";
$rating = $_POST['rating'];
$comment = $_POST['comment'];
$user_id = $_SESSION['User_id'];
$seller_id = $_POST['sellerid'];
$veh_id = $_POST['vehid'];

// Insert rating into the database
$sql = "INSERT INTO comment (user_id,seller_id,veh_id,rating, comment) VALUES ($user_id, $seller_id, $veh_id, $rating, '$comment')";

if ($conn->query($sql) === TRUE) {
    // Update the rating count
    $sql_count = "UPDATE vehicles SET rating_counts = rating_counts + 1 WHERE id = '$veh_id'"; // Assuming id = 1 for the count row

    if ($conn->query($sql_count) === TRUE) {
        echo "Rating submitted successfully.";
    } else {
        echo "Error updating rating count: " . $conn->error;
    }
} else {
    echo "Error inserting rating: " . $conn->error;
}

$conn->close();
?>