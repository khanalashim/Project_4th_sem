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
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/users.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
                    <li id="active"><i class='bx bx-task'></i>Users</li>
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

                <h1>Users /</h1>
                <div class="vehicle_info">
                    <div class='vehicle_container'>



                        <table class="table">
                            <thead>
                                <th scope="col">Id</th>
                                <th scope=" col">Firstname</th>
                                <th scope=" col">Lastname</th>
                                <th scope=" col">Email</th>
                                <th scope=" col">Profile</th>

                                </tr>
                            </thead>
                            <tbody>
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


                                $query = "SELECT * FROM users";
                                $result = $conn->query($query);

                                if ($result->num_rows > 0) {

                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        echo "<tr><th scope='row'>" . $id . "</th>";
                                        echo "<td>" . $row['firstname'] . "</td>";
                                        echo "<td>" . $row['lastname'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        // echo "<td><img height='80px' width='68px' src='" . $row['destination'] . "'</td>";
                                        echo "<td><a href='del.php?delete_id=$id'><button>Delete</button></a>";
                                        echo "<a href='edit.php?edit_id=$id'><button>Edit</button></a> </td></tr>";

                                    }

                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<!--"</td> <td>".$row['lastname']."</td> <td>".$row['email']."</td>"