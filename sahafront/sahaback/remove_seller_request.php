<?php
session_start();
include "../db.php";

$seller_id = $_GET['seller_id'];

$query2 = "UPDATE seller SET verify_request = '' WHERE s_id='$seller_id'";
$query3 = "DELETE FROM seller_verification Where seller_id=$seller_id";

$result2 = $conn->query($query2);
$result3 = $conn->query($query3);

unset($_SESSION['seller_front_img']);
unset($_SESSION['seller_back_img']);

if ($result2 === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $query2 . "<br>" . $conn->error;
}

if ($result3 === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $query3 . "<br>" . $conn->error;
}

header('location: verify_seller.php');

