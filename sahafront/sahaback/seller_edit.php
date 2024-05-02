<?php
// session_start();
// $ok = $_SESSION['User_id'];
// if ($ok === 0) {
//   echo "Welcome ,Admin";
// } else {
//   header('location: login.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/users.css">
    <link rel="stylesheet" href="style/vehicle.css">
    <link rel="stylesheet" href="style/bookings.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script> -->

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
                    <li id="active"><i class='bx bxs-badge-dollar'></i>Sellers</li>
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

                <h1>Sellers / Edit /</h1>
                <div class="vehicle_info">


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
                    ?>


                    <?php


                    ?>
                    <div class='vehicle_container'>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <td scope="col">S.N</td>
                                    <td scope="col">Firstname</td>
                                    <td scope="col">Lastname</td>
                                    <td scope="col">Email</td>
                                    <td scope="col">Action</td>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id = $_GET['edit_id'];
                                $query = "SELECT * FROM seller WHERE s_id=$id";
                                $result = $conn->query($query);

                                if ($result->num_rows > 0) {

                                    while ($row = $result->fetch_assoc()) {

                                        echo "<form action='seller_edit_process.php?edit_id=" . $id . "' method='post'>";
                                        echo "<tr>";
                                        echo "<td>" . $row['s_id'] . "</td>";
                                        echo "<td><input type='text' name='firstname' value='" . $row['firstname'] . "'></td>";
                                        echo "<td><input type='text' name='lastname' value='" . $row['lastname'] . "'></td>";
                                        echo "<td><input type='email' name='email' value='" . $row['email'] . "'></td>";
                                        echo "<td id='action'><a href=''><button>Submit</button></a>";
                                        echo "</tr></form>";
                                    }

                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>