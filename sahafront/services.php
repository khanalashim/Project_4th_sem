<?php
include "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/services.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <h1>Sahayatri</h1>
            <ul>
                <a href="index.php">
                    <li><i class='bx bx-home'></i>Home</li>
                </a>
                <a href="track_bookings.php">
                    <li><i class='bx bx-task'></i>Track Bookings</li>
                </a>
                <a href="add_vehicle.php">
                    <li><i class='bx bx-list-plus'></i>Add Vehicle</li>
                </a>
                <a href="services.php">
                    <li id="active"><i class='bx bxs-package'></i>Verification</li>
                </a>
                <a href="<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo "profile.php";
                } else {
                    echo "sahaback/login.php";
                } ?>">
                    <li><i class='bx bx-log-in'></i>
                        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                            echo "Profile";
                        } else {
                            echo "Login";
                        } ?>
                    </li>
                </a>
            </ul>
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
                        <?php if (isset($_SESSION["User_firstname"])) {
                            // User is logged in, so echo the first name
                            echo $_SESSION["User_firstname"];
                        } else {
                            // User is not logged in
                            echo "User";
                        } ?>
                    </p>
                    <div class="profile_image">
                        <img height="40px" width="40px" src="profile.jpg" alt="">

                    </div>
                </div>
                <h1>Home /</h1>
                <div class="vehicle_info">
                    <div class="vehicle_container">
                        <?php
                        $user_id = 0;
                        if (isset($_SESSION["User_id"])) {
                            // User is logged in, so echo the first name
                            $user_id = $_SESSION['User_id'];
                        }
                        $query = "SELECT * FROM users WHERE id='$user_id'";
                        $result = $conn->query($query);
                        $verify_request = false;
                        $user_verify = 0;

                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                $verify_request = $row['verify_request'];
                                $user_verify = $row['user_verify'];
                            }
                        }

                        if ($verify_request == true && $user_verify == 0) {
                            echo "";

                            ?>
                            <img height="140px" width="160px" src="pending1.gif" alt="pending" srcset="">
                            <h2 style="background-color: ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: 2px; width: 380px; font-style: italic;"
                                id="pending">Your Request Pending...</h2>
                            <?php
                        } elseif ($user_verify == 1) { ?>
                            <img height="140px" width="160px" src="success.gif" alt="success" srcset="">
                            <h2 style="background-color: ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: 2px; width: 380px; font-style: italic;"
                                id="pending">You Are Successfully Verified</h2>
                        <?php } else { ?>
                            <form action="verify.php?user_id=<?php if (isset($_SESSION['User_id'])) {
                                echo $_SESSION['User_id'];
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
</body>
<script>
    var profile = document.querySelector('.profile_image');

    profile.addEventListener('click', function () {
        window.location.href = 'logout.php';
    });

</script>

</html>