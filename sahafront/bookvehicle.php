<?php
include "db.php";
session_start();
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];
$name = $_POST['Name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$veh_id = $_GET['veh_id'];
$seller_id = $_GET['seller_id'];

$query1 = "SELECT * FROM vehicles WHERE id=$veh_id";
$result1 = $conn->query($query1);

while ($row = $result1->fetch_assoc()) {
    $vehicleimg = $row['img'];
    $vehiclename = $row['vehiclename'];
    $vehicleid = $row['vehicleid'];
    $vehiclemodel = $row['model'];
    $vehicleprice = $row['price'];
    $user_id = $_SESSION["User_id"];
    $status = 'p';

}

$query = "INSERT INTO bookings(user_id,seller_id,status,fromdate,todate,name,email,phone,vehicleid,vehicleimg,vehiclename,vehiclemodel,vehicleprice) VALUES ('$user_id','$seller_id','$status','$fromdate','$todate','$name','$email','$phone','$vehicleid','$vehicleimg','$vehiclename','$vehiclemodel','$vehicleprice')";
$result = $conn->query($query);

$query1 = "UPDATE vehicles SET booked='true', fromdate='$fromdate', todate='$todate', user_id='$user_id' WHERE id='$veh_id'";
$result1 = $conn->query($query1);

$query2 = "INSERT INTO booked (user_id, seller_id, veh_id, veh_name, veh_price, veh_model, veh_img,booked,fromdate,todate) VALUES ('$user_id','$seller_id','$veh_id','$vehiclename','$vehicleprice','$vehiclemodel','$veh_img','true','$fromdate','$todate')";
$result2 = $conn->query($query2);



if ($result === TRUE) {
    header('location: index.php');
    echo "Record inserted successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
if ($result1 === TRUE) {
    header('location: index.php');
    echo "Record inserted successfully";
} else {
    echo "Error: " . $query1 . "<br>" . $conn->error;
}