<?php
session_start();
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

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM seller WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $user_id = $row['s_id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        // $user_verify = $row['user_verify'];
    }

    if ($result->num_rows > 0) {
        $_SESSION["Seller_firstname"] = $firstname;
        $_SESSION["Seller_lastname"] = $lastname;
        $_SESSION["Seller_email"] = $email;
        $_SESSION["Seller_id"] = $user_id;
        // $_SESSION["Seller_verify"] = $user_verify;
        $_SESSION["Seller_loggedin"] = true;

        echo $_SESSION["User_firstname"], $_SESSION["User_lastname"], $_SESSION["User_email"];
        header('location: dashboard.php');
    } else {

        echo "Error! User Doesnot exist";
    }


}