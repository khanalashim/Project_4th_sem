<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .form{
            
            margin-left: auto;
            margin-right: auto;
            height: 56%;
            width: 34%;
        }
        label,input,button{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        label,h1{
            text-align: center;
        }
        button{
            padding: 6px 8px;
            border-radius: 12px;
            background-color: black;
            color: white;
        }
        input{
            border: none;
            border-radius: 12px;
            width: 239;
            height: 45px;
        }
    </style>
</head>
<body>

    <h1>Registration </h1>
    
    <form class="form" action="db.php" method="post" enctype="multipart/form-data">
        <label for="">First Name</label>
        <input type="text" name="firstname">
        <label for="">Last Name</label>
        <input type="text" name="lastname">
        <label for="">Email</label>
        <input type="email" name="email">
        <button type="submit">Submit</button>
        <label for="image">Select Image:</label>
        <input type="file" name="file" accept="image/*" required>
        <br>
    </form>


</body>
</html>