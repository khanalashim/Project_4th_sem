<?php
session_start();
include "../db.php";

$user_id = $_GET['user_id'];
$front_img = $_SESSION['front_img'];
$back_img = $_SESSION['back_img'];

$query1 = "UPDATE users SET user_verify = 1 WHERE id='$user_id'";
$query2 = "UPDATE users SET front_img='$front_img', back_img='$back_img' WHERE id='$user_id'";
$query3 = "DELETE FROM verification Where user_id=$user_id";

$result1 = $conn->query($query1);
$result2 = $conn->query($query2);
$result3 = $conn->query($query3);

unset($_SESSION['front_img']);
unset($_SESSION['back_img']);

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

header('location: verify_request.php');

