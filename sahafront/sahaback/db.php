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
    // Process form data here
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $file = $_FILES["file"];

    //print_r($file);

    $filename = $_FILES["file"]["name"];
    $filepath = $_FILES["file"]["full_path"];
    $filetype = $_FILES["file"]["type"];
    $filetemp = $_FILES["file"]["tmp_name"];
    $fileerror = $_FILES["file"]["error"];
    $filesize = $_FILES["file"]["size"];

    $fileext = explode('.', $filename);
    $ext = strtolower(end($fileext));

    $allowed = array('jpg','jpeg','png');
    if (in_array($ext, $allowed)) {
        if($fileerror === 0) {
            if($filesize < 10000000) {
                $filenewname = uniqid('',true).'.'.$ext;
                $filedestination = 'image/'.$filenewname;
                move_uploaded_file($filetemp,$filedestination);
                // Insert data into the database
                $query1 = "INSERT INTO users (firstname, lastname, email,uid, destination) VALUES ('$firstname', '$lastname', '$email','$filenewname', '$filedestination')";

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

include"index.php";
$conn->close();
?>


