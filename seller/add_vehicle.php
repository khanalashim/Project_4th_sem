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
    <link rel="stylesheet" href="style/addvehicle.css">
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
                    <li><i class='bx bx-home'></i>Dashboard</li>
                </a>
                <a href="add_vehicle.php">
                    <li id="active"><i class='bx bx-task'></i>Add Vehicles</li>
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
                    <!-- <div class="search">
                        <input id="search" type="text" placeholder="Search...">
                        <a href="#">
                            <div class="search_icon">
                                <box-icon name='search'></box-icon>

                            </div>
                        </a>
                    </div> -->



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

                <h1>Add Vehicles /</h1>
                <div class="vehicle_info">
                    <div class="vehicle_container">
                        <form action="vehicle_add_process.php" method="post" enctype="multipart/form-data">
                            <div class="first_add">
                                <div class="veh_name">
                                    <label for="">Vehicle Name</label><br>
                                    <input name="veh_name" type="text" placeholder="Enter Vehicle Name">
                                </div>

                                <div class="veh_model">
                                    <label for="">Model</label><br>
                                    <input name="veh_model" type="text" placeholder="Enter Vehicle Model">
                                </div>
                            </div>
                            <div class="second_add">
                                <div class="veh_color">
                                    <label for="">Color</label>
                                    <input name="veh_color" type="text" placeholder="Enter Vehicle Color">
                                </div>
                                <div class="veh_mileage">
                                    <label for="">Mileage</label>
                                    <input name="veh_mileage" type="text" placeholder="Enter Vehicle Mileage">
                                </div>
                                <div class="veh_price">
                                    <label for="">Price/Day</label>
                                    <input name="veh_price" type="text" placeholder="Enter Price/day">
                                </div>
                            </div>
                            <div class="third_add">
                                <div class="veh_km">
                                    <label for="">KM driven</label>
                                    <input name="veh_km" type="number" placeholder="Enter KM Driven">
                                </div>
                                <div class="veh_reg">
                                    <label for="">Reg. No</label>
                                    <input name="veh_reg" type="text" placeholder="Enter vehicle's Registration No.">
                                </div>
                            </div><br>

                            <label for="">Description</label>
                            <textarea name="txt" id="txt" cols="25" rows="8"
                                placeholder="Describe your Vehicle's Information in Detail..."></textarea><br>

                            <label for="">Image</label>
                            <input name="veh_img" type="file" accept="image/*">

                            <button id="vehicle_add_btn" type="submit">Submit</button>
                        </form>
                    </div>


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