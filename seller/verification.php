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
    <link rel="stylesheet" href="style/verification.css">
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
                    <li><i class='bx bx-task'></i>Add Vehicles</li>
                </a>
                <a href="track_vehicles.php">
                    <li><i class='bx bx-list-plus'></i>Track Vehicles</li>
                </a>
                <a href="booked_vehicles.php">
                    <li><i class='bx bxs-package'></i>Booked Vehicles</li>
                </a>
                <a href="verification.php">
                    <li id="active"><i class='bx bxs-package'></i>Verification</li>
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
                    <div class="vehicle_container">
                        <?php
                        $seller_id = 0;
                        if (isset($_SESSION["Seller_id"])) {
                            // seller is logged in, so echo the first name
                            $seller_id = $_SESSION['Seller_id'];
                        }
                        $query = "SELECT * FROM seller WHERE s_id='$seller_id'";
                        $result = $conn->query($query);
                        $verify_request = false;
                        $seller_verify = 0;

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                $verify_request = $row['verify_request'];
                                $seller_verify = $row['seller_verify'];
                            }
                        }

                        if ($verify_request == true && $seller_verify == 0) {
                            echo "";

                            ?>
                            <img height="140px" width="160px" src="../sahafront/pending1.gif" alt="pending" srcset="">
                            <h2 style="background-color: ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: 2px; width: 380px; font-style: italic;"
                                id="pending">Your Request Pending...</h2>
                            <?php
                        } elseif ($seller_verify == 1) { ?>
                            <img height="140px" width="160px" src="../sahafront/success.gif" alt="success" srcset="">
                            <h2 style="background-color: ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: 2px; width: 380px; font-style: italic;"
                                id="pending">You Are Successfully Verified</h2>
                        <?php } else { ?>
                            <form action="verify.php?seller_id=<?php if (isset($_SESSION['Seller_id'])) {
                                echo $_SESSION['Seller_id'];
                            } ?>" method="post" enctype="multipart/form-data">
                                <label id="head" for="">Verification</label><br>
                                <label for="">Front face Nationality ID</label>
                                <input name="front_img" type="file" accept="image/*" required>

                                <label for="">Back face Nationality ID</label>
                                <input name="back_img" type="file" accept="image/*" required>
                                <button id="verify" type="submit">Verify</button>
                            </form>
                        <?php } ?>
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