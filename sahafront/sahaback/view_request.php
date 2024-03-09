<?php
session_start();
$ok = $_SESSION['Admin_id'];
if ($ok === 0) {
    echo "";
} else {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="view.css">

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sahayatri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vehicle.php">Vehicles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="verify_request.php">Requests</a>
                    </li>

                </ul>
                <form class="search-box d-flex">
                    <input class="form-control me-2" type="search" autocomplete="off" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <?php


    ?>


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

    $user_id = $_GET['user_id'];

    $query = "SELECT * FROM users WHERE id='$user_id'";
    $query1 = "SELECT * FROM verification WHERE user_id='$user_id'";

    $result = $conn->query($query);
    $result1 = $conn->query($query1);



    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "<div class='vehicle_container'>";
            echo "<div id='prof_cont'><img id='frozen' src='../vector.png'>";
            echo "<img id='profile' src='../profile.jpg' anchor='frozen'>";
            echo "<h2 id='name'>" . $row['firstname'] . " " . $row['lastname'] . " </h2>";
            echo "<div class='main_prof'><div id='left_prof'><h4> ⭐User</h4>";
            echo "<i class='bx bxs-map'></i><h5>Bharatpur-11</h5>";
            echo "</div>";
            echo "<div id='right_prof'> ";
            echo "<div class='email_cont'><h3>Email</h3><i class='bx bxs-envelope'><span>" . $row['email'] . "</span></i></div><div class='phone_cont'><h3>Phone</h3><i class='bx bxs-phone'><span>xxxxxxxxx</span></i></div></div></div>";
            if ($result1->num_rows > 0) {

                while ($row = $result1->fetch_assoc()) {
                    $_SESSION['front_img'] = $row['front_img'];
                    $_SESSION['back_img'] = $row['back_img'];
                    echo "<div class='request_img'><img id='front' height='265px' width='305px' src='" . $row['front_img'] . "'>";
                    echo "<img id='back' height='265px' width='305px' src='" . $row['back_img'] . "'>";
                    echo "<a href='request_process.php?user_id=$user_id'><button id='request_btn'>Accept Request</button></div></a>";
                }
            }
            echo "</div>";
            echo "</div>";
        }
    }



    ?>
    </tbody>
    </table>
    </a>

</body>


</html>
<!--"</td> <td>".$row['lastname']."</td> <td>".$row['email']."</td>"