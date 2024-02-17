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
    <link rel="stylesheet" href="style/add_vehicle.css">

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
                    <li id="active"><i class='bx bx-list-plus'></i>Add Vehicle</li>
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
                    <Button class="side-panel-toggle">Add Vehicle</Button>
                    <div class='sidepanel'>
                        <h1>Fill the Information</h1>
                        <form action="sahaback/vehicleadd.php" method="post">
                            <label for="">Vehicle Name</label>
                            <input type="text" name="vehicle" required><br>

                            <label for="">Model</label>
                            <input type="text" name="model" required><br>

                            <label for="">Price</label>
                            <input type="text" name="price" required><br>

                            <label for="">Image</label>
                            <input type="file" accept="image/*" name="vehicleimg" required><br>

                            <button type="submit">Continue</button>
                        </form>





                    </div>
                    <table class='table'>
                        <thead class='table-light'>
                            <tr>
                                <td>S.N</td>
                                <td>Vehicle</td>
                                <td>Name</td>
                                <td>Model</td>
                                <td>Price</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $user_id = 0;
                            if (isset($_SESSION["User_id"])) {
                                $user_id = $_SESSION["User_id"];
                            } else {
                                echo "Login/Register First";
                            }
                            $query = "SELECT * FROM vehicles WHERE user_id='$user_id'";
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {

                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td> <img height='89px' width='120px' src='sahaback/" . $row['img'] . "'></td>";
                                    echo "<td>" . $row['vehiclename'] . "</td>";
                                    echo "<td>" . $row['model'] . "</td>";
                                    echo "<td>" . $row['price'] . "</td>";
                                    echo "<td id='action'><a href='index.php'><button>Delete</button></a>";
                                    echo "<a href='index.php'><button> Edit</button></a></td>";
                                    echo "</tr>";
                                }
                            } ?>
                        </tbody>
                    </table>
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

                btn.addEventListener("click", function () {
                    side.style.display = 'block';
                    side.classList.toggle('open');
                    main.style.filter = 'blur(7px);';

                })
                date1.addEventListener("change", resultchange())
                date2.addEventListener("change", resultchange())



            </script>
</body>

</html>