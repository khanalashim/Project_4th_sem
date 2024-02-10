<?php
include 'db.php';
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
                    <li><i class='bx bx-home'></i>Home</li>
                </a>
                <a href="track_bookings.php">
                    <li id="active"><i class='bx bx-list-plus'></i>Track Bookings</li>
                </a>
                <a href="trending.php">
                    <li><i class='bx bx-trending-up'></i>Trending</li>
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
                    <p>Welcome, Ashim</p>
                    <img height="40px" width="40px" src="profile.jpg" alt="">
                </div>

                <h1>Home /</h1>
                <div class="vehicle_info">
                    <?php
                    $veh_id = $_GET['edit_id'];
                    $query = "SELECT * FROM bookings WHERE id='$veh_id'";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) { ?>



                            <div class='sidepanel'>
                                <h1>Fill the Information</h1>
                                <form action="update_booking.php?veh_id=<?php echo $veh_id ?>" method="post">
                                    <label for="">From:</label>
                                    <input id="date1" type="date" name="fromdate" value="<?php echo $row['fromdate'] ?>"
                                        required><br>

                                    <label for="">To:</label>
                                    <input id="date2" type="date" name="todate" value="<?php echo $row['todate'] ?>"
                                        required><br>

                                    <label for="">Name:</label>
                                    <input id="name" type="text" name="Name" placeholder="Enter Your Name"
                                        value="<?php echo $row['name'] ?>" required><br>

                                    <label for="">Email:</label>
                                    <input id="email" type="email" name="email" placeholder="Enter Your Email"
                                        value="<?php echo $row['email'] ?>" required><br>

                                    <label for="">Phone:</label>
                                    <input id="phone" type="tel" name="phone" placeholder="Enter Your Phone Number"
                                        value="<?php echo $row['phone'] ?>" required>

                                    <button>Continue</button>
                                </form>

                            </div>
                        <?php }
                    } ?>




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
        function resultchange() {
            var fromDate = new Date(date1.value);
            var toDate = new Date(date2.value);

            var differenceInTime = toDate.getTime() - fromDate.getTime();
            var differenceInDays = differenceInTime / (1000 * 3600 * 24);

            var days = fromDate.getHours();


        }


        side.style.display = 'block';
        side.classList.toggle('open');
        main.style.filter = 'blur(7px);';


        date1.addEventListener("change", resultchange())
        date2.addEventListener("change", resultchange())



    </script>
</body>

</html>