<?php
include 'db.php';
session_start();
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
    <link rel="stylesheet" href="style/res.css">

</head>

<body>
    <div class="container">
        <div class="sidebar">
            <h1>Sahayatri</h1>
            <ul>
                <a href="index.php">
                    <li id="active"><i class='bx bx-home'></i>Home</li>
                </a>
                <a href="track_bookings.php">
                    <li><i class='bx bx-task'></i>Track Bookings</li>
                </a>
                <a href="add_vehicle.php">
                    <li><i class='bx bx-list-plus'></i>Add Vehicle</li>
                </a>
                <a href="services.php">
                    <li><i class='bx bxs-package'></i>Services</li>
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
                        <input id="search" type="text" placeholder="Enter the vehicle name">
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
                    <?php
                    $veh_id = $_GET['vehicle'];
                    $query = "SELECT * FROM vehicles WHERE id='$veh_id'";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='reserve_info'>";
                            echo "<img id='reserve_img' height='320px' width='430px' src='sahaback/" . $row['img'] . "' alt='img here'>";
                            echo "<h2> Name: " . $row['vehiclename'] . " - " . $row['model'] . "<h2>";
                            echo "<p>Price - " . $row['price'] . "</p>";
                            echo "<button class='side-panel-toggle' type='button' id='reserve_btn'> Book Now</button>";
                            // echo "<div class='sidepanel'><h1>Fill the Information</h1>";
                            // echo "</div>";
                            echo "</div>";
                            echo "<div class='reserve_desp'>";
                            echo "<div id='desp'><h3>Description</h3>";
                            echo "<p> The bike is very good condition </p></div>";
                            echo "</div>";
                        }
                    } ?>

                    <div class='sidepanel'>
                        <h1>Fill the Information</h1>
                        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                            $user_available = true;
                        } else {
                            $user_available = false;
                        } ?>
                        <form action="<?php
                        if ($user_available == true) {
                            echo "bookvehicle.php?veh_id=" . $veh_id;
                        } else {
                            echo "sahaback/login.php";
                        } ?>" method="post">
                            <label for="">From:</label>
                            <input id="date1" type="date" name="fromdate" required><br>

                            <label for="">To:</label>
                            <input id="date2" type="date" name="todate" required><br>

                            <label for="">Name:</label>
                            <input id="name" type="text" name="Name" placeholder="Enter Your Name" required><br>

                            <label for="">Email:</label>
                            <input id="email" type="email" name="email" placeholder="Enter Your Email" required><br>

                            <label for="">Phone:</label>
                            <input id="phone" type="tel" name="phone" placeholder="Enter Your Phone Number" required>

                            <button>Continue</button>
                        </form>





                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        var btn = document.querySelector('.side-panel-toggle');
        var side = document.querySelector('.sidepanel');
        var main = document.querySelector('.container');

        var date1 = document.getElementById('date1');
        var date2 = document.getElementById('date2');
        var result = document.getElementById('result');
        var profile = document.querySelector('.profile_image');

        function resultchange() {
            var fromDate = new Date(date1.value);
            var toDate = new Date(date2.value);

            var differenceInTime = toDate.getTime() - fromDate.getTime();
            var differenceInDays = differenceInTime / (1000 * 3600 * 24);

            var days = fromDate.getHours();


        }

        btn.addEventListener("click", function () {
            side.style.display = 'block';
            side.classList.toggle('open');
            main.style.filter = 'blur(7px);';

        })
        date1.addEventListener("change", resultchange())
        date2.addEventListener("change", resultchange())


        profile.addEventListener('click', function () {
            window.location.href = 'logout.php';
        });


    </script>
</body>

</html>