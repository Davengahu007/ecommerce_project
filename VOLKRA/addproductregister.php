<?php
print_r($_POST);
require("connect.php");

$product_name = mysqli_real_escape_string($conn,$_POST["productname"]);
$product_id =mysqli_real_escape_string($conn,$_POST["productid"]);
$product_description = mysqli_real_escape_string($conn,$_POST["productdescription"]);
$product_image = $_FILES['product_image']['name'];
$date_created = $_POST["datecreated"];
$date_updated = $_POST["dateupdated"];
$unit_price = mysqli_real_escape_string($conn,$_POST["unitprice"]);
$quantity_available = mysqli_real_escape_string($conn,$_POST["quantityavailable"]);
$category_name = $_POST["category_name"];
$subcategory_name = $_POST["subcategory_name"];
$added_by = mysqli_real_escape_string($conn,$_POST["addedby"]);

$destination = "uploads/" . basename($_FILES['product_image']['name']);

$sql = "INSERT INTO VOLKRA.products (product_name, product_id, product_description, product_image, created_at , updated_at , unit_price ,available_quantity , category_name , sub_category_name, added_by)
 VALUES ('$product_name' , '$product_id' , '$product_description' , '$product_image' , '$date_created' , '$date_updated' , '$unit_price' , '$quantity_available' ,'$category_name' ,'$subcategory_name' , '$added_by')";

 if (mysqli_query($conn, $sql)) {
   move_uploaded_file($_FILES['product_image']['tmp_name'], $destination);
   header('location:admindashboard.php');
   echo "New record created successfully";
 } else {
   echo "There is an error". mysqli_error($conn) ."<br><br>";
 }
 mysqli_close($conn);
 ?>
