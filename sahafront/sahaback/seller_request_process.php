<?php
session_start();
include "../db.php";

$seller_id = $_GET['seller_id'];
$front_img = $_SESSION['seller_front_img'];
$back_img = $_SESSION['seller_back_img'];

$query1 = "UPDATE seller SET seller_verify = 1 WHERE s_id='$seller_id'";
$query2 = "UPDATE seller SET front_img='$front_img', back_img='$back_img' WHERE s_id='$seller_id'";
$query3 = "DELETE FROM seller_verification Where seller_id=$seller_id";

$result1 = $conn->query($query1);
$result2 = $conn->query($query2);
$result3 = $conn->query($query3);

unset($_SESSION['seller_front_img']);
unset($_SESSION['seller_back_img']);

if ($result1 === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $query1 . "<br>" . $conn->error;
}
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

