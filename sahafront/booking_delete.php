<?php

include "db.php";
$id = $_GET['delete_id'];
$status = 'f';

$query1 = "SELECT * FROM bookings Where id=$id";
$result1 = $conn->query($query1);

$query2 = "UPDATE bookings SET status='$status' WHERE id=$id";
$result2 = $conn->query($query2);

$query3 = "UPDATE vehicles SET booked='', fromdate='', todate='', user_id='' WHERE id='$id'";
$result3 = $conn->query($query3);


header('location: track_bookings.php');
?>