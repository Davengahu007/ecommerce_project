<?php
print_r($_POST);
require("connect.php");


$user_id = $_POST["userid"];
$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];



$sql = "INSERT INTO VOLKRA.users (user_id, firstname, surname, username, email, password, gender) VALUES ('$user_id' , '$first_name' , '$last_name' ,'$username', '$email' , '$password', '$gender')";

if(mysqli_query($conn,$sql)){

  header('location:Volkra_signin.php');
  exit();
}
    else
    {
      echo "Error:" . $sql . "<br>" .$conn -> error;
    }


?>
