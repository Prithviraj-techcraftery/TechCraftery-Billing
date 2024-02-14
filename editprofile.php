<?php
	//check login
	include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            background-color: #f45e4f;
        }

        h2 {
            color: #333;
            text-align: center;
            padding: 5px;   
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
        border: none;
        padding: 12px 24px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    </style>
</head>
<body>

<h2>Edit Profile</h2>

<form action="" method="post" enctype="multipart/form-data">
    <label for="new_name">Name:</label>
    <input type="text" id="new_name" name="new_name" required><br>
    
    <label for="new_email">Email:</label>
    <input type="text" id="new_email" name="new_email" required><br>

    <label for="new_no">Phone No. :</label>
    <input type="text" id="new_no" name="new_no" required><br>

    <label for="new_image">Profile Image:</label>
    <input type="file" id="new_image" name="new_image"><br>

    <input type="submit" value="Update Profile">
</form>

</body>
</html>