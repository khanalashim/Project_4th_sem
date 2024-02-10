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

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
    }

    if ($result->num_rows > 0) {
        $_SESSION["User_firstname"] = $firstname;
        $_SESSION["User_lastname"] = $lastname;
        $_SESSION["User_email"] = $email;
        $_SESSION["loggedin"] = true;

        echo $_SESSION["User_firstname"], $_SESSION["User_lastname"], $_SESSION["User_email"];
        header('location: ../index.php');
    } else {
        echo "Error! User Doesnot exist";
    }

}