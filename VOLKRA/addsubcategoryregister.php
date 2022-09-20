<?php
print_r($_POST);
require("connect.php");


$subcategory_name =mysqli_real_escape_string($conn,$_POST['subcategoryname']);
$subcategory_id = mysqli_real_escape_string($conn,$_POST['subcategoryid']);
$category_name =mysqli_real_escape_string($conn,$_POST['category_name']);
$sql = "INSERT INTO VOLKRA.sub_category (Subcategory_name, Subcategory_id, Category_id) VALUES ('$subcategory_name' , '$subcategory_id' , '$category_name')";


if(mysqli_query($conn,$sql))
    {
      header('location:admindashboard.php');
        echo '<script>alert("Product added successfully")</script>';
    }


?>
