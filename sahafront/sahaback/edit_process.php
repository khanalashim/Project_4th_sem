<?php
include "../db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_SESSION["User_id"])) {
        $user_id = $_SESSION["User_id"];
    } else {
        $user_id = 0;
    }
    $vehicle = $_POST['vehicle'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $veh_id = $_GET['veh_id'];



    // Insert data into the database
    $query1 = "UPDATE vehicles SET vehiclename='$vehicle', model='$model',price='$price' WHERE id='$veh_id'";

    $result1 = $conn->query($query1);

    if ($result1 === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $query1 . "<br>" . $conn->error;
    }
    echo 'File uploaded Successfully';
    header('location: vehicle.php');



}
$conn->close();
// if ($_SESSION['User_id'] == 0) {
//     header('location: vehicle.php');
// } elseif ($_SESSION['User_id'] != 0) {
//     header('location: ../add_vehicle.php');
// }
?>