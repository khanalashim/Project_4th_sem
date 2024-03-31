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
session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_id = 0;
    $seller_id = 0;

    $veh_name = $_POST['veh_name'];
    $veh_model = $_POST['veh_model'];
    $veh_color = $_POST['veh_color'];
    $veh_mileage = $_POST['veh_mileage'];
    $veh_price = $_POST['veh_price'];
    $veh_km = $_POST['veh_km'];
    $veh_reg = $_POST['veh_reg'];
    $txt = $_POST['txt'];

    $vehicleimg = $_FILES['veh_img'];

    $filename = $_FILES["veh_img"]["name"];
    $filepath = $_FILES["veh_img"]["full_path"];
    $filetype = $_FILES["veh_img"]["type"];
    $filetemp = $_FILES["veh_img"]["tmp_name"];
    $fileerror = $_FILES["veh_img"]["error"];
    $filesize = $_FILES["veh_img"]["size"];
    print_r($vehicleimg);

    $fileext = explode('.', $filename);
    $ext = strtolower(end($fileext));

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($ext, $allowed)) {
        if ($fileerror === 0) {
            if ($filesize < 10000000) {
                $filenewname = uniqid('', true) . '.' . $ext;
                $filedestination = 'vehicleimg/' . $filenewname;
                $newfiledestination = 'vehicleimg/' . $filenewname;

                move_uploaded_file($filetemp, $filedestination);
                // Insert data into the database

                $query = "INSERT INTO vehicles (user_id, seller_id, img, vehiclename, model, color, mileage, price, km, registration, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                // Prepare the statement
                $stmt = $conn->prepare($query);

                // Bind parameters to the prepared statement
                $stmt->bind_param("iisssssssss", $user_id, $seller_id, $newfiledestination, $veh_name, $veh_model, $veh_color, $veh_mileage, $veh_price, $veh_km, $veh_reg, $txt);

                // Execute the prepared statement
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    echo "Data inserted successfully.";
                } else {
                    echo "Error: Data insertion failed.";
                }

                $stmt->close();

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