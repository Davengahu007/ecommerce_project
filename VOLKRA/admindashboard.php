<?php
session_start();
 ?>

<!DOCTYPE html>
 <html>
  <head>
   <title>Admin Dashboard</title>
   <link rel = "stylesheet" href="admindashboard.css?v=<?php echo time()?>">
  </head>

<body>
<img src="VK-emblem2.png" class="center">
<h1 class = "Welcome_Statement">WELCOME TO VOLKRA ADMIN DASHBOARD</h1>

<div class = "container">
  <div class = "Title">Below are the admin functions</div>
      <div class = "Admin_functions">


        <div class = "welcome">
          <?php if (isset($_SESSION['adminusername'])) : ?>
           <h3> Welcome <strong>
               <?php echo $_SESSION['adminusername']; ?>
           </strong></h3>
           <?php endif ?>
       </div>

<div class = "adminbuttons">
        <div>
          <button class = "adminbutton"><a href="View_users.php">View Users</a></button>
        </div>

        <div>
          <button class = "adminbutton"><a href="view_orders.php"> View Orders</a></button>
        </div>

        <div>
          <button class = "adminbutton"><a href="view_product.php"> View Products</a></button>
        </div>

        <div>
          <button class = "adminbutton"><a href="Volkra-addproduct.php"> Create product</a></button>
        </div>

        <div>
          <button class = "adminbutton"><a href="Volkra-addCategory.php"> Create Categories</a></button>
        </div>

        <div>
          <button class = "adminbutton"><a href="Volkra-addsubcategory.php"> Create sub categories</a></button>
        </div>

    </div>
  </div>
</div>
</body>
</html>
