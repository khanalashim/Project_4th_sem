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
    <link rel="stylesheet" href="style/booked_vehicles.css">
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
                    <li id="active"><i class='bx bxs-package'></i>Booked Vehicles</li>
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
                            $user_available = true;
                        } else {
                            echo "Login";
                            $user_available = false;
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

                <h1>Booked Vehicles /</h1>
                <div class="vehicle_info">
                    <table class='table'>
                        <thead class='table-light'>
                            <tr>
                                <td>S.N</td>
                                <td>Vehicle</td>
                                <td>Name</td>
                                <td>From</td>
                                <td>To</td>
                                <td>Client Name</td>
                                <td>Email</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $user_id = 0;
                            if (isset($_SESSION["Seller_id"])) {
                                $seller_id = $_SESSION["Seller_id"];
                            } else {
                                echo "Login/Register First";
                            }
                            $query = "SELECT * FROM bookings WHERE seller_id='$seller_id'";
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {

                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    if ($row['status'] == 'f') {
                                        continue;
                                    } else {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td> <img height='89px' width='120px' src='../sahafront/sahaback/" . $row['vehicleimg'] . "'></td>";
                                        echo "<td>" . $row['vehiclename'] . "</td>";
                                        echo "<td>" . $row['fromdate'] . "</td>";
                                        echo "<td>" . $row['todate'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        if ($user_available == true) {
                                            // echo "<td id='action'><a href='message.php'><button>Message</button></a>";
                                            echo "<td id='action'><a href='accept.php'><button>Accept</button></a>";
                                        } else {
                                            echo "<td id='action'><a href='sahaback/login.php'><button>Delete</button></a>";
                                            echo "<a href='sahaback/login.php'><button> Edit</button></a></td>";

                                        }
                                        echo "</tr>";
                                    }

                                }
                            } ?>
                        </tbody>
                    </table>

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