<?php

include "../db.php";
$id = $_GET['delete_id'];

$query1 = "SELECT * FROM users Where id=$id";
$result1 = $conn->query($query1);
while ($row = $result1->fetch_assoc()) {
    if (unlink($row['destination'])) {
        echo 'The file is deleted';
    } else {
        echo 'There was an error';
    }
}
$query = "DELETE FROM users Where id=$id";
$result = $conn->query($query);


include "index.php";

?>