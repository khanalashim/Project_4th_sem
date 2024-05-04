<?php

include "../db.php";
$id = $_GET['delete_id'];

$query = "DELETE FROM seller Where s_id=$id";
$result = $conn->query($query);


header("location: sellers.php");

?>