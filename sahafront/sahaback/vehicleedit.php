<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sahayatri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="vehicle.php">Vehicles</a>
                    </li>

                </ul>
                <form class="search-box d-flex">
                    <input class="form-control me-2" type="search" autocomplete="off" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

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

    $veh_id = $_GET['edit_id'];
    ?>

    <!-- Trigger button -->
    <!-- <button id="openModal" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
        Add Vehicle
    </button> -->

    <!-- Popup form container -->
    <div id="myModal"
        class="modal fixed w-full h-full top-0 left-0 hidden overflow-x-hidden overflow-y-auto bg-black bg-opacity-50">
        <div class="modal-content mx-auto my-20 p-6 bg-white rounded shadow-lg w-1/2">
            <!-- Close button -->
            <span id="closeModal" class="close absolute top-0 right-0 mt-4 mr-4 cursor-pointer">&times;</span>

            <!-- Form content -->
            <form action="edit_process.php?veh_id=<?php echo $veh_id; ?>" class="mb-4" method="Post"
                enctype="multipart/form-data">
                <?php $query = "SELECT * FROM vehicles WHERE id='$veh_id'";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <label for="vehicle" class="block text-gray-700 font-bold mb-2">Vehicle Name</label>
                        <input type="text" id="vehicle" name="vehicle" class="w-full p-2 border rounded"
                            value="<?php echo $row['vehiclename'] ?>">

                        <label for="model" class="block text-gray-700 font-bold mb-2 mt-4">Model:</label>
                        <input type="text" id="model" name="model" class="w-full p-2 border rounded"
                            value="<?php echo $row['model'] ?>">

                        <label for="price" class="block text-gray-700 font-bold mb-2 mt-4">Price</label>
                        <input type="text" id="price" name="price" class="w-full p-2 border rounded"
                            value="<?php echo $row['price'] ?>">

                    <?php }
                } ?>
                <button type="submit"
                    class="mt-4 bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add</button>
            </form>
        </div>
    </div>
    <script>
        const modal = document.getElementById('myModal');

        modal.style.display = 'block';

    </script>


    <!-- <script>
        // JavaScript to handle modal open and close
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');
        const modal = document.getElementById('myModal');

        openModalButton.addEventListener('click', () => {
            modal.style.display = 'block';
        });

        closeModalButton.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script> -->


    <?php


    ?>











    $id = $row['id'];
    }

    }

    ?> -->

</body>

</html>