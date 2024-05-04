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
          <li id="active"><i class='bx bx-list-plus'></i>Vehicles</li>
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

        <h1>Vehicles /</h1>
        <div class="vehicle_info">


          <!-- Trigger button -->
          <button id="openModal" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
            Add Vehicle
          </button>

          <!-- Popup form container -->
          <!-- <div id="myModal"
            class="modal fixed w-full h-full top-0 left-0 hidden overflow-x-hidden overflow-y-auto bg-black bg-opacity-50">
            <div class="modal-content mx-auto my-20 p-6 bg-white rounded shadow-lg w-1/2">
               Close button
              <span id="closeModal" class="close absolute top-0 right-0 mt-4 mr-4 cursor-pointer">&times;</span>

               Form content
              <form action="vehicleadd.php" class="mb-4" method="Post" enctype="multipart/form-data">
                <label for="vehicle" class="block text-gray-700 font-bold mb-2">Vehicle Name</label>
                <input type="text" id="vehicle" name="vehicle" class="w-full p-2 border rounded">

                <label for="model" class="block text-gray-700 font-bold mb-2 mt-4">Model:</label>
                <input type="text" id="model" name="model" class="w-full p-2 border rounded">

                <label for="price" class="block text-gray-700 font-bold mb-2 mt-4">Price</label>
                <input type="text" id="price" name="price" class="w-full p-2 border rounded">

                <label for="vehicleimg" class="block text-gray-700 font-bold mb-2 mt-4">Price</label>
                <input type="file" id="vehicleimg" name="vehicleimg" accept="image/*" required
                  class="w-full p-2 border rounded">

                <button type="submit"
                  class="mt-4 bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add</button>
              </form>
            </div>
          </div> -->
          <?php
          include "../db.php";
          ?>

          <script>
            // JavaScript to handle modal open and close
            const openModalButton = document.getElementById('openModal');
            const closeModalButton = document.getElementById('closeModal');
            const modal = document.getElementById('myModal');

            openModalButton.addEventListener('click', () => {
              window.location.href = 'vehicle_add.php';
            });

          </script>


          <?php


          ?>
          <div class='vehicle_container'>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Vehicleimg</th>
                  <th scope="col">Vehicle Name</th>
                  <th scope="col">Model</th>
                  <th scope="col">Price</th>

                </tr>
              </thead>
              <tbody>
                <?php

                $query = "SELECT * FROM vehicles";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {

                  while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];

                    echo "<tr><th scope='row'>" . $id . "</th>";
                    //echo "<td>".$row['img']."</td>";
                    echo "<td><img height='80px' width='68px' src='" . $row['img'] . "'</td>";
                    echo "<td>" . $row['vehiclename'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td><a href='vehicledel.php?delete_id=$id'><button>Delete</button></a>";
                    echo "<a href='vehicleedit.php?edit_id=$id'><button>Edit</button></a> </td></tr>";
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