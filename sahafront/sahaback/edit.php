<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .form {

            margin-left: auto;
            margin-right: auto;
            height: 56%;
            width: 34%;
        }

        label,
        input,
        button {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        label,
        h1 {
            text-align: center;
        }

        button {
            padding: 6px 8px;
            border-radius: 12px;
            background-color: black;
            color: white;
        }

        input {
            border: none;
            border-radius: 12px;
            width: 239;
            height: 45px;
        }
    </style>
</head>

<body>

    <h1>Registration </h1>
    <?php
    include "../db.php";

    $edit_id = $_GET['edit_id'];
    $que = "SELECT * FROM users WHERE id='$edit_id'";
    $result = $conn->query($que);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $first = $row['firstname'];
            $last = $row['lastname'];
            $email = $row['email'];
            ?>
            <form class="form" action="dbedit.php?edit_id=<?php echo "$edit_id" ?>" method="post">
                <label for="">First Name</label>
                <input type="text" name="firstname" value="<?php echo "$first"; ?>">
                <label for="">Last Name</label>
                <input type="text" name="lastname" value="<?php echo "$last"; ?>">
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo "$email"; ?>">
                <button type="submit">Submit</button>
            </form>
        <?php }
    } ?>

</body>

</html>