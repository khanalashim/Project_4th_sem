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
    <link rel="stylesheet" href="style/dashboard.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="view.css">

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
                    <li id="active"><i class='bx bxs-package'></i>Verify Users</li>
                </a>
                <a href="bookings.php">
                    <li><i class='bx bxs-package'></i>Bookings</li>
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
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "mydb";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $database);
                    // Check connection
                    if ($conn->connect_error) {
                        die ("Connection failed: " . $conn->connect_error);
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
                                    echo "<div class='request_img'><img id='front' src='" . $row['front_img'] . "'>";
                                    echo "<img id='back' src='" . $row['back_img'] . "'>";
                                    echo "<a href='request_process.php?user_id=$user_id'><button id='request_btn'>Accept Request</button><a href='remove_request.php'><button id='remove_btn'>Remove</button></a></div></a>";
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
                </div>
            </div>
        </div>
    </div>


</body>


</html>
<!--"</td> <td>".$row['lastname']."</td> <td>".$row['email']."</td>"