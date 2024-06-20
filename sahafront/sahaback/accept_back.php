<?php

include "../db.php";
$id = $_GET['id'];

$query1 = "UPDATE bookings SET status = 'c' WHERE id = $id";
$result1 = $conn->query($query1);
header("location: bookings.php");
?>