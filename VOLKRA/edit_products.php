
<?php
session_start();
include_once 'connect.php';

$result = mysqli_query($conn,"SELECT * FROM users");
$row= mysqli_fetch_array($result);
 ?>

<!DOCTYPE html>
 <html>
  <head>
   <title>Sign Up</title>
   <link rel = "stylesheet" href="Volkra-adduser.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">VOLKRA EDIT FORM</h1>

<div class = "container">
  <div class = "Title">Enter the new details here</div>
    <form action = "edit_userregister.php" method = "post">
      <div class = "user_details">

        <div class = "input-box">
          <span class=  "details"> Product ID </span>
          <input type = "number" name = "productid" placeholder = "Enter user ID" value=<?php echo $row['productid']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> product name </span>
          <input type = "text" name = "productname" placeholder = "Enter Product Name" value=<?php echo $row['product_name']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> product_description </span>
          <input type = "text" name = "productdescription" placeholder = "Enter product description" value=<?php echo $row['product_description']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> Product image </span>
          <input type = "text" name = "product_image" placeholder = "Input product image" value=<?php echo $row['product_image']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> Unit Prices </span>
          <input type = "text" name = "unitprice" placeholder = "Enter unit price" value=<?php echo $row['available_quantity']; ?> >
        </div>

        <div class = "input-box">
          <span class=  "details"> Available Quantity </span>
          <input type = "text" name = "quantityavailable" placeholder = "Enter available quantity" value=<?php echo $row['available_quantity']; ?> >
        </div>

        <div class = "input-box">
          <span class=  "details"> Category Name </span>
          <input type = "text" name = "category_name" placeholder = "Enter category_name" value=<?php echo $row['category_name']; ?>>
        </div>

        <div class = "input-box">
          <span class=  "details"> Sub category name </span>
          <input type = "text" name = "sub_category_name" placeholder = "Enter sub category name" value=<?php echo $row['sub_category_name']; ?>>
        </div>


      <div class = "button">
      <input type = "submit" value = "Edit">
      </div>
      </div>

   </div>
  </form>
</body>
</html>
