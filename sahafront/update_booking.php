<?php

include "db.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process form data here
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $id = $_GET['veh_id'];
    $query2 = "UPDATE bookings SET fromdate='$fromdate', todate='$todate',name='$name',email='$email',phone='$phone' WHERE id='$id'";
    $result1 = $conn->query($query2);
}
include "track_bookings.php";

$conn->close();
?>