<?php
session_start();
include "db.php";

$rating = $_POST['rating'];
$comment = $_POST['comment'];
$user_id = $_SESSION['User_id'];
$seller_id = $_POST['sellerid'];
$veh_id = $_POST['vehid'];

// Check if a rating for the same vehicle ID already exists in the comment table
$sql_check = "SELECT * FROM comment WHERE veh_id='$veh_id' AND user_id='$user_id'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    // If a rating exists, update the comment for that row
    $sql_update = "UPDATE comment SET comment = '$comment' WHERE veh_id = '$veh_id'";
    if ($conn->query($sql_update) === TRUE) {
        echo "Comment updated successfully.";
    } else {
        echo "Error updating comment: " . $conn->error;
    }
} else {
    // If no rating exists, insert a new row with the rating and comment
    $sql_insert = "INSERT INTO comment (user_id, seller_id, veh_id, rating, comment) VALUES ($user_id, $seller_id, $veh_id, $rating, '$comment')";
    if ($conn->query($sql_insert) === TRUE) {
        // Update the rating count
        $sql_count = "UPDATE vehicles SET rating_counts = rating_counts + 1 WHERE id = '$veh_id'";
        if ($conn->query($sql_count) === TRUE) {
            echo "Rating submitted successfully.";
        } else {
            echo "Error updating rating count: " . $conn->error;
        }
    } else {
        echo "Error inserting rating: " . $conn->error;
    }
}

$conn->close();
?>