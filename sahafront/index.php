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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="vehicle.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h1>hero</h1>
        </div>

        <div class="main">
            
            <div class="bg-white">
                <h1>listed Item</h1>
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                  <h2 class="sr-only">Products</h2>
              
<!-- ... Previous HTML code ... -->

<div class="conatiner_vehicle">
    <?php 
    $query = "SELECT * FROM vehicles";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()){
            echo "<a id='main' href='#'>";
            echo "<div class='vehicle_img'>";
            echo "<img id='vehicle_img' src='sahaback/".$row['img']."' alt='Sahayatri Images' >";
            echo "</div><h3>".$row['vehiclename']."</h3>";
            echo "<p>".$row['price']."</p>";
            echo "</a>";
        }
    }
    ?>
    <!-- More products... -->
</div>

<!-- ... Remaining HTML code ... -->

              </div>
        </div>
    </div>
</body>
</html>
      
      
      

                <!-- $id = $row['id'];
                echo "<tr><th scope='row'>".$id."</th>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td><img height='80px' width='68px' src='".$row['destination']."'</td>";
                echo "<td><a href='del.php?delete_id=$id'><button>Delete</button></a>";
                echo "<a href='edit.php?edit_id=$id'><button>Edit</button></a> </td></tr>";

            }
            
        }
    
      ?> -->
