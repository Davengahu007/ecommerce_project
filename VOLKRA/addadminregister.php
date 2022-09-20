<?php
print_r($_POST);
require("connect.php");


$adminusername = $_POST["adminusername"];
$adminpassword = $_POST["adminpassword"];


$sql = "INSERT INTO VOLKRA.site_manager (mainusername, mainpassword) VALUES ('$adminusername' , '$adminpassword')";

if(mysqli_query($conn,$sql))
{
  header('location:Volkra-AdminSignin.php');
  echo "New record created successfully";
}
    else
    {
      echo "Error:" . $sql . "<br>" .$conn -> error;
    }

?>
