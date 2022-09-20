<?php
session_start();
    require "connect.php";

    $userID = $_POST['userid'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    $updateQuery = "UPDATE users set firstname='$first_name', surname='$last_name', email='$email', username='$username' ,password='$password', gender='$gender' where user_id='$userID'";
    mysqli_query($conn, $updateQuery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="additemform.css">
</head>
<body>
<div class="headercontainer">
    </div>
    <hr>

    <h2>USER INFO EDITED SUCCESSFULLY</h2>

    <a href="view_users.php">Return to users table</a>
</body>
</html>
