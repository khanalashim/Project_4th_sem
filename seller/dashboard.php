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

                <h1>Dashboard /</h1>
                <div class="vehicle_info">
                    <?php
                    $id = $_SESSION['Seller_id'];
                    $query = "SELECT * FROM vehicles WHERE seller_id='$id'";
                    $result = $conn->query($query);
                    $count_v = 0;
                    $count_s = 0;

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            $count_v = $count_v + 1;
                        }
                    }

                    $query1 = "SELECT * FROM booked WHERE seller_id='$id'";
                    $result1 = $conn->query($query1);
                    if ($result1->num_rows > 0) {

                        while ($row1 = $result1->fetch_assoc()) {
                            $count_s = $count_s + 1;
                        }
                    }


                    echo "<div class='vehicle_container'>";
                    echo "<div class='total_vehicles'><h1><i class='bx bxs-car'></i>Total Vehicles</h1><h2>" . $count_v . "</h2></div>";
                    echo "<div class='total_sells'><h1><i class='bx bxs-package'></i>Total Sells</h1><h2>" . $count_s . "</h2></div>";
                    echo "<div class='total_earning'><h1><i class='bx bx-dollar'></i>Total Earning</h1><h2>Rs. 45000</h2></div>";
                    echo "<div class='total_categories'><h1><i class='bx bxs-duplicate'></i>Total Categories</h1><h2>5</h2></div>";
                    echo "</div>";
                    // }
                    // }               ?>

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