<?php
session_start();
// $_SESSION = array();
// session_destroy();

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <style>
        .bxs-star {
            color: #d1b56a;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <h1>Sahayatri
            </h1>
            <ul>
                <a href="dashboard.php">
                    <li id="active"><i class='bx bx-home'></i>Dashboard</li>
                </a>
                <a href="add_vehicle.php">
                    <li><i class='bx bx-task'></i>Add Vehicles</li>
                </a>
                <a href="track_vehicles.php">
                    <li><i class='bx bx-list-plus'></i>Track Vehicles</li>
                </a>
                <a href="booked_vehicles.php">
                    <li><i class='bx bxs-package'></i>Booked Vehicles</li>
                </a>
                <a href="verification.php">
                    <li><i class='bx bxs-package'></i>Verification</li>
                </a>
                <a href="<?php if (isset($_SESSION["Seller_loggedin"]) && $_SESSION["Seller_loggedin"] === true) {
                    echo "profile.php";
                } else {
                    echo "login.php";
                } ?>">
                    <li><i class='bx bx-log-in'></i>
                        <?php if (isset($_SESSION["Seller_loggedin"]) && $_SESSION["Seller_loggedin"] === true) {
                            echo "Profile";
                        } else {
                            echo "Login";
                        } ?>
                    </li>
                </a>
            </ul>
            <div class="seller">
                <h1><i class='bx bx-money-withdraw'></i>Become a Buyer</h1>
                <a href="../sahafront/sahaback/new.php">
                    <p>Regsiter<i class='bx bx-right-arrow-alt'></i></p>
                </a>
            </div>
        </div>

        <div class="main">

            <div class="vehicle">
                <div class="nav_search">
                    <div class="search">
                        <input id="search" type="text" placeholder="Search...">
                        <a href="#">
                            <div class="search_icon">
                                <box-icon name='search'></box-icon>

                            </div>
                        </a>
                    </div>



                    <p>Welcome,
                        <?php if (isset($_SESSION["Seller_firstname"])) {
                            // User is logged in, so echo the first name
                            echo $_SESSION["Seller_firstname"];
                        } else {
                            // User is not logged in
                            echo "Seller";
                        } ?>
                    </p>
                    <div class="profile_image">
                        <img height="40px" width="40px" src="../sahafront/profile.jpg" alt="">

                    </div>
                </div>

                <h1>Verification /</h1>
                <div class="vehicle_info">
                    <?php
                    $query = "SELECT * FROM vehicles";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            $veh_id = $row['id'];
                            echo "<div class='vehicle_container'>";

                            echo "</div>";
                        }
                    } ?>

                </div>
            </div>
        </div>
    </div>
    <script>
        var profile = document.querySelector('.profile_image');

        profile.addEventListener('click', function () {
            window.location.href = 'logout.php';
        });
    </script>

</body>

</html>