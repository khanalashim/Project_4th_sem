<?php
session_start();
include "../sahafront/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process form data here
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $c_password = $_POST["confirm"];

    if ($password == $c_password) {
        $query1 = "INSERT INTO seller (firstname, lastname, email,password) VALUES ('$firstname', '$lastname', '$email','$password')";

        $result1 = $conn->query($query1);

        if ($result1 === TRUE) {
            echo "Record inserted successfully";

        } else {
            echo "Error: " . $query1 . "<br>" . $conn->error;
        }
    } else {
        echo "Error ... Password doesnot Match";
        header('location: login.php');
    }

    //print_r($file);

    // $filename = $_FILES["file"]["name"];
    // $filepath = $_FILES["file"]["full_path"];
    // $filetype = $_FILES["file"]["type"];
    // $filetemp = $_FILES["file"]["tmp_name"];
    // $fileerror = $_FILES["file"]["error"];
    // $filesize = $_FILES["file"]["size"];

    // $fileext = explode('.', $filename);
    // $ext = strtolower(end($fileext));

    // $allowed = array('jpg', 'jpeg', 'png');
    // if (in_array($ext, $allowed)) {
    //     if ($fileerror === 0) {
    //         if ($filesize < 10000000) {
    //             $filenewname = uniqid('', true) . '.' . $ext;
    //             $filedestination = 'image/' . $filenewname;
    //             move_uploaded_file($filetemp, $filedestination);
    //             // Insert data into the database

    //             echo 'File uploaded Successfully';
    //         } else {
    //             echo 'file Too Big';
    //         }
    //     } else {
    //         echo 'There was some problem status 1';
    //     }

    // } else {
    //     echo 'Not Correct extension, Extension Not Supported';
    // }





}

header('location: login.php');
$conn->close();
?>