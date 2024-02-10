<?php
session_start();
?>
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
            font-family: Macan, Helvetica Neue, Helvetica, Arial, sans-serif;
        }

        .form {
            padding: 13px 24px;
            margin-top: 45px;
            margin-left: auto;
            margin-right: auto;
            height: 56%;
            width: 24%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.35);
            word-spacing: 2px;
            letter-spacing: 2px;
        }

        label,
        input,
        button {
            display: block;

        }


        h1 {
            text-align: center;
            margin-bottom: 12px;
        }

        button {
            padding: 12px 18px;
            border-radius: 6px;
            background-color: black;
            color: white;
            width: 100%;
        }

        input {
            border: 2px solid gray;
            border-radius: 8px;
            width: 98%;
            height: 18px;
            padding: 12px 4px;
            margin-top: 7px;
        }
    </style>
</head>

<body>



    <form class="form" action="logged.php" method="post" enctype="multipart/form-data">
        <h1>Login </h1>
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Enter Your email"><br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter Your password"><br>
        <a href="new.php">New User?</a>
        <button type="submit">Submit</button><br>
        <br>
    </form>


</body>

</html>