<?php
print_r($_POST);
require("connect.php");


$user_name = $_POST["name"];
$password = $_POST["password"];
$answer = $_POST["answer"];
$password_hash = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO VOLKRA.user_details (username, password, Answer) VALUES ('$user_name' , '$password'  , '$answer')";

if(mysqli_query($conn,$sql)){
  echo "New record created successfully";

}
    else
    {
      echo "Error:" . $sql . "<br>" .$conn -> error;
    }


?>
