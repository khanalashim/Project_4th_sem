<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class="sidebar">
        <h1>Sahayatri</h1>
        <ul>
            <a href="index.php">
                <li><i class='bx bx-home'></i>Home</li>
            </a>
            <a href="new_listed.php">
                <li><i class='bx bx-list-plus'></i>Find Vehicles</li>
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

</body>

</html>