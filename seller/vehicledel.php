<?php

include "../sahafront/db.php";
$id = $_GET['delete_id'];

$query1 = "SELECT * FROM vehicles Where id=$id";
$result1 = $conn->query($query1);
while ($row = $result1->fetch_assoc()) {
    $imagePath = '../sahafront/sahaback/' . $row['img'];
    if (unlink($imagePath)) {
        echo 'The file is deleted';
    } else {
        echo 'There was an error';
    }
}
$query = "DELETE FROM vehicles Where seller_id=$id";
$result = $conn->query($query);


header('location: track_vehicles.php');
?>