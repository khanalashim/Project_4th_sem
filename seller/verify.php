<?php
include "../sahafront/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $seller_id = $_GET['seller_id'];
    $frontimg = $_FILES['front_img'];
    $backimg = $_FILES['back_img'];

    $frontname = $_FILES["front_img"]["name"];
    $frontpath = $_FILES["front_img"]["full_path"];
    $fronttype = $_FILES["front_img"]["type"];
    $fronttemp = $_FILES["front_img"]["tmp_name"];
    $fronterror = $_FILES["front_img"]["error"];
    $frontsize = $_FILES["front_img"]["size"];

    $backname = $_FILES["back_img"]["name"];
    $backpath = $_FILES["back_img"]["full_path"];
    $backtype = $_FILES["back_img"]["type"];
    $backtemp = $_FILES["back_img"]["tmp_name"];
    $backerror = $_FILES["back_img"]["error"];
    $backsize = $_FILES["back_img"]["size"];

    $frontext = explode('.', $frontname);
    $backext = explode('.', $backname);

    $f_ext = strtolower(end($frontext));
    $b_ext = strtolower(end($backext));

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($f_ext, $allowed) && in_array($b_ext, $allowed)) {
        if ($fronterror === 0 && $backerror === 0) {
            if ($frontsize < 10000000 && $backsize < 10000000) {

                $frontnewname = uniqid('', true) . '.' . $f_ext;
                $frontdestination = '../sahafront/sahaback/verifyimg/' . $frontnewname;
                $finalfrontdestination = 'verifyimg/' . $frontnewname;

                $backnewname = uniqid('', true) . '.' . $b_ext;
                $backdestination = '../sahafront/sahaback/verifyimg/' . $backnewname;
                $finalbackdestination = 'verifyimg/' . $backnewname;

                move_uploaded_file($fronttemp, $frontdestination);
                move_uploaded_file($backtemp, $backdestination);
                // Insert data into the database
                $query1 = "INSERT INTO seller_verification (seller_id,front_img,back_img) VALUES ('$seller_id','$finalfrontdestination','$finalbackdestination')";
                $query = "UPDATE seller SET verify_request='true' WHERE s_id='$seller_id'";
                $result = $conn->query($query);
                if ($result === TRUE) {
                    echo "Record inserted successfully";

                } else {
                    echo "Error: " . $query1 . "<br>" . $conn->error;
                }

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
header('location: verification.php');






