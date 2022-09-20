<?php
print_r($_POST);
require("connect.php");


$category_names = $_POST["category_name"];
$category_id = $_POST["category_id"];


$sql = "INSERT INTO VOLKRA.category (Category_ID, Category_name) VALUES ('$category_id' , '$category_names')";

if(mysqli_query($conn,$sql))
{
  header('location:admindashboard.php');
  echo "New record created successfully";
}
    else
    {
      echo "Error:" . $sql . "<br>" .$conn -> error;
    }

?>
