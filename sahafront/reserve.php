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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
                <a href="booking_history.php">
                    <li><i class='bx bx-list-plus'></i>Booking History</li>
                </a>
                <a href="services.php">
                    <li><i class='bx bxs-package'></i>Verification</li>
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
            <div class="seller">
                <h1><i class='bx bx-money-withdraw'></i>Become a seller</h1>
                <a href="../seller/registration.php">
                    <p>Regsiter<i class='bx bx-right-arrow-alt'></i></p>
                </a>
            </div>
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
                            $seller_id = $row['seller_id'];
                            $booked = 'false';
                            $todate = $row['todate'];
                            $todateJS = date('Y-m-d', strtotime($todate));
                            echo "<div class='reserve_info'>";
                            echo "<img id='reserve_img' height='320px' width='430px' src='sahaback/" . $row['img'] . "' alt='img here'>";
                            echo "<h2> Name: " . $row['vehiclename'] . " - " . $row['model'] . "<h2>";
                            echo "<p>Price - " . $row['price'] . "</p>";
                            if ($row['booked'] == true) {
                                echo "<h3 style='color: green;'>Booked from " . $row['fromdate'] . " to " . $row['todate'] . "";
                                echo "<button class='side-panel-toggle' type='button' id='reserve_btn'> Book Now</button>";
                                $booked = 'true';
                            } else {
                                echo "<button class='side-panel-toggle' type='button' id='reserve_btn'> Book Now</button>";
                            }

                            // echo "<div class='sidepanel'><h1>Fill the Information</h1>";
                            // echo "</div>";
                            echo "</div>";
                            echo "<div class='reserve_desp'>";
                            echo "<div id='desp'><h3>Description</h3>";
                            echo "<p>" . $row['description'] . "</p></div>";
                            echo "</div>";
                        }
                    } ?>

                    <div class='sidepanel'>
                        <h1>Fill the Information</h1>
                        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                            $user_available = true;
                            if (isset($_SESSION["User_id"])) {
                                // User is logged in, so echo the id
                                $user_id = $_SESSION["User_id"];
                            } else {
                                // User is not logged in
                        
                            }
                            $query = "SELECT * FROM users WHERE id='$user_id'";
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {

                                while ($row = $result->fetch_assoc()) {
                                    $user_verify = $row['user_verify'];
                                }
                            }
                        } else {
                            $user_available = false;
                        } ?>
                        <form action="<?php
                        if ($user_available == true) {
                            if ($user_verify == 1) {
                                echo "bookvehicle.php?veh_id=" . $veh_id . "&seller_id=" . $seller_id;
                            } else {
                                echo "services.php";

                            }
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
                <div class="review_ratings">
                    <div class="main_reviews">
                        <h1>Reviews and Ratings</h1>
                        <div class="rating-wrapper" data-id="raiders">
                            <div class="star-wrapper">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div id="rating_counter">
                                <?php $sql_count = "SELECT rating_counts FROM vehicles WHERE id='$veh_id'";
                                $result = $conn->query($sql_count);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo "(" . $row["rating_counts"] . ")";
                                } else {
                                    echo "(0)";
                                } ?>
                            </div>
                        </div>
                        <div class="comment_main">
                            <div class="profile_image_cmt">
                                <img height="50px" width="50px" src="profile.jpg" alt="">
                            </div>
                            <textarea name="" id="comment" cols="60" rows="4"
                                placeholder="Write a comment for this product..."></textarea>
                            <button class='side-panel-toggle' type='button' id='reserve_btn_ratings'> Publish</button>
                        </div>

                    </div>
                    <div class="reviews">
                        <h1>herp</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var btn = document.querySelector('.side-panel-toggle');
            var side = document.querySelector('.sidepanel');
            var main = document.querySelector('.container');

            var date1 = document.getElementById('date1');
            var date2 = document.getElementById('date2');
            var result = document.getElementById('result');
            var profile = document.querySelector('.profile_image');
            var todate = '<?php echo $todateJS; ?>';
            var valid = '<?php echo $booked; ?>';
            if (valid == 'false') {
                const today = new Date();
                const minDate1 = new Date(today);
                minDate1.setDate(minDate1.getDate() + 1);

                // Set the minimum date for date1 input


                date1.setAttribute('min', minDate1.toISOString().split('T')[0]);
            } else if (valid == 'true') {
                const today = new Date();
                const minDate1 = new Date(todate);
                minDate1.setDate(minDate1.getDate() + 1);

                // Set the minimum date for date1 input


                date1.setAttribute('min', minDate1.toISOString().split('T')[0]);
            }



            btn.addEventListener("click", function () {
                side.style.display = 'block';
                side.classList.toggle('open');
                main.style.filter = 'blur(7px);';
            });



            function resultchange() {
                // Get today's date
                const today = new Date();
                // Get the selected date from date1 input
                const selectedDate = new Date(date1.value);

                // If selected date is before today's date, set it to today
                if (selectedDate < today) {
                    date1.valueAsDate = today;
                }


                // Set the minimum date for date2 input
                // by adding 1 day to the selected date from date1 input
                const minDate = new Date(selectedDate.getTime() + (24 * 60 * 60 * 1000));
                const minDateString = minDate.toISOString().split('T')[0];
                date2.setAttribute('min', minDateString);



                // Clear the value of date2 input if it's less than the new minimum date
                if (new Date(date2.value) < minDate) {
                    date2.value = '';
                }



            }

            date1.addEventListener("change", resultchange);
            date2.addEventListener("change", resultchange);

            profile.addEventListener('click', function () {
                window.location.href = 'logout.php';
            });
        });

        var sellerid = <?php echo json_encode($seller_id); ?>;
        var vehid = <?php echo json_encode($veh_id); ?>;

    </script>


    <script src="res.js"></script>
</body>

</html>