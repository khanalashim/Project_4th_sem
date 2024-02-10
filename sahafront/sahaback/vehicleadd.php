<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $vehicle = $_POST['vehicle'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $vehicleimg = $_FILES['vehicleimg'];

    $filename = $_FILES["vehicleimg"]["name"];
    $filepath = $_FILES["vehicleimg"]["full_path"];
    $filetype = $_FILES["vehicleimg"]["type"];
    $filetemp = $_FILES["vehicleimg"]["tmp_name"];
    $fileerror = $_FILES["vehicleimg"]["error"];
    $filesize = $_FILES["vehicleimg"]["size"];
    print_r($vehicleimg);

    $fileext = explode('.', $filename);
    $ext = strtolower(end($fileext));

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($ext, $allowed)) {
        if ($fileerror === 0) {
            if ($filesize < 10000000) {
                $filenewname = uniqid('', true) . '.' . $ext;
                $filedestination = 'vehicleimg/' . $filenewname;

                move_uploaded_file($filetemp, $filedestination);
                // Insert data into the database
                $query1 = "INSERT INTO vehicles (img, vehiclename, model,price) VALUES ('$filedestination', '$vehicle', '$model',$price)";

                $result1 = $conn->query($query1);

                if ($result1 === TRUE) {
                    echo "Record inserted successfully";
                } else {
                    echo "Error: " . $query1 . "<br>" . $conn->error;
                }
                echo 'File uploaded Successfully';
            } else {
                echo 'file Too Big';
            }
        } else {
            echo 'There was some problem status 1';
        }

    } else {
        echo 'Not Correct extension, Extension Not Supported';
    }

}
$conn->close();
header('location: vehicle.php');
?>