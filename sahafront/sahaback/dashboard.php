<?php
session_start();
// $_SESSION = array();
// session_destroy();

include "../db.php";

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
                <a href="users.php">
                    <li><i class='bx bx-task'></i>Users</li>
                </a>
                <a href="vehicle.php">
                    <li><i class='bx bx-list-plus'></i>Vehicles</li>
                </a>
                <a href="verify_request.php">
                    <li><i class='bx bx-star'></i>Verify Users</li>
                </a>
                <a href="bookings.php">
                    <li><i class='bx bx-cart-add'></i>Bookings</li>
                </a>
                <a href="booked_vehicles.php">
                    <li><i class='bx bx-store-alt'></i>Booked</li>
                </a>
                <a href="sellers.php">
                    <li><i class='bx bxs-badge-dollar'></i>Sellers</li>
                </a>
                <a href="verify_seller.php">
                    <li><i class='bx bx-star'></i>Verify Seller</li>
                </a>
            </ul>
            <!-- <div class="seller">
                <h1><i class='bx bx-money-withdraw'></i>Become a Buyer</h1>
                <a href="../sahafront/sahaback/new.php">
                    <p>Regsiter<i class='bx bx-right-arrow-alt'></i></p>
                </a>
            </div> -->
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



                    <p>Welcome, Admin</p>
                    <div class="profile_image">
                        <img height="40px" width="40px" src="../profile.jpg" alt="img">
                    </div>
                </div>

                <h1>Dashboard /</h1>
                <div class="vehicle_info">
                    <?php

                    $query = "SELECT * FROM vehicles";
                    $result = $conn->query($query);
                    $count_v = 0;
                    $count_u = 0;
                    $count_s = 0;
                    $bookings = 0;

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            $count_v = $count_v + 1;
                        }
                    }

                    $query1 = "SELECT * FROM users";
                    $result1 = $conn->query($query1);
                    if ($result1->num_rows > 0) {

                        while ($row1 = $result1->fetch_assoc()) {
                            $count_u = $count_u + 1;

                        }
                    }
                    $query3 = "SELECT * FROM bookings";
                    $result3 = $conn->query($query3);
                    if ($result3->num_rows > 0) {

                        while ($row3 = $result3->fetch_assoc()) {
                            $bookings = $bookings + 1;

                        }
                    }

                    $query2 = "SELECT * FROM seller";
                    $result2 = $conn->query($query2);
                    if ($result2->num_rows > 0) {

                        while ($row2 = $result2->fetch_assoc()) {
                            $count_s = $count_s + 1;

                        }
                    }

                    echo "<div class='vehicle_container'>";
                    echo "<div class='total_sells'><h1><i class='bx bxs-package'></i>Total Users</h1><h2>" . $count_u . "</h2></div>";
                    echo "<div class='total_earning'><h1><i class='bx bx-dollar'></i>Total Sellers</h1><h2> " . $count_s . "</h2></div>";
                    echo "<div class='total_categories'><h1><i class='bx bxs-duplicate'></i>Total Bookings</h1><h2>" . $bookings . "</h2></div>";
                    echo "<div class='total_vehicles'><h1><i class='bx bxs-car'></i>Total Vehicles</h1><h2>" . $count_v . "</h2></div>";
                    echo "</div>";
                    // }
                    // }                                                                                                                                                                                                                                             ?>

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